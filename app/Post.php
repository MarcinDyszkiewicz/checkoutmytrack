<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'img', 'content', 'meta_img', 'metadesc', 'alias',];
    protected $hidden = ['id', 'id_user'];


//    public function getUser($id_user)
//    {
//
//        return $id_user('Admin');
//    }
}
