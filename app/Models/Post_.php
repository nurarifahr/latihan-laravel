<?php

namespace App\Models;


class Post
{
    private static $new_blog = [
        [
            "judul" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Nur Arifah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sed quam recusandae tempora aut pariatur cupiditate quo suscipit! Corrupti accusamus voluptates perferendis quibusdam magni labore nam repellendus omnis ipsa consequuntur asperiores, magnam officiis. Fugiat eum soluta quo tenetur explicabo eligendi, quod a est voluptatibus maxime! Dolores, suscipit quia. Nihil, aliquam."
        ],
        [
            "judul" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Raharisti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error sed quam recusandae tempora aut pariatur cupiditate quo suscipit! Corrupti accusamus voluptates perferendis quibusdam magni labore nam repellendus omnis ipsa consequuntur asperiores, magnam officiis."
        ]
    ];

    public static function all(){
        $posts = collect(self::$new_blog);
        return $posts;
    }

    public static function find($slug){
        $blog_posts = static::all();
        return $blog_posts->firstWhere('slug', $slug);
    }
}
