<?php

class Post extends BaseModel {

    protected $table = 'posts';

    //Ensure data is valid based on type and size specifications
    public static $rules = [
        'title' => 'required|max:100',
        'body' => 'required|max:10000'
    ];

}
