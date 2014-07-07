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
}
