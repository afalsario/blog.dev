<?php

class PostsController extends \BaseController {

    public function __construct()
    {
        // call base controller constructor
        parent::__construct();

        // run auth filter before all methods on this controller except index and show
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        if(Input::has('search'))
        {
            $search = Input::get('search');
            $posts = Post::with('user')->where('title', 'LIKE', "%$search%")->orderBy('created_at', 'desc')->paginate(4);
        }
        else
        {
            $posts = Post::with('user')->paginate(4);
        }

        return View::make('posts.index')->with('posts', $posts);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create-edit');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return $this->update(null);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return View::make('posts.show')->with('post', $post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return View::make('posts.create-edit')->with('post', $post);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post = new Post();
        $post->user()->associate(Auth::user());
        // $post->user_id = Auth::user()->id;

        if($id != null)
        {
            $post = Post::findOrFail($id);
        }

        // create the validator
        $validator = Validator::make(Input::all(), Post::$rules);

        // attempt validation
        if ($validator->fails())
        {
            Session::flash('errorMessage', 'Error: Post not saved. Please enter valid data.');
            // validation failed, redirect to the post create page with validation errors and old inputs
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else
        {
            // validation succeeded, create and save the post
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->save();

            if(Input::hasFile('image') && Input::file('image')->isValid())
            {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            }

            Session::flash('successMessage', 'Action successful!');

            return Redirect::action('PostsController@show', $post->id);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('successMessage', 'Post deleted successfully');

        return Redirect::action('PostsController@index');
    }


}
