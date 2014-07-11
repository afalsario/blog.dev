<?php

class Post extends BaseModel {

    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    //Ensure data is valid based on type and size specifications
    public static $rules = [
        'title' => 'required|max:100',
        'body' => 'required'
    ];

    public function posts()
    {
        return $this->hasMany('Post');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function addUpLoadedImage($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

    public function renderBody()
    {
        $Parsedown = new Parsedown();
        $parsed = $Parsedown->text($this->body);

        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_html = $purifier->purify($parsed);

        return $clean_html;
    }

    public function preview()
    {
        return substr("$this->body", 0, 200) . "...";
    }

    static public function findBySlug($slug)
    {
        $post = self::where('slug', $slug)->first();
        return ($post == null) ? App::abort(404) : $post;
    }

    public function setSlugAttribute($value)
    {
        $value = str_replace(' ', '-', trim($value));
        $this->attributes['slug'] = strtolower($value);
    }

}
