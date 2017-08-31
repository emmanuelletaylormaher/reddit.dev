<?php

namespace App\Models;

use App\Models\BaseModel;


class Post extends BaseModel
{
    protected $table = "posts";

    public static $rules = array(
    	'title' => 'required|max:100|',
    	'url' => 'required|url',
    	'content' => 'required'
    );

    public function user()
    {
    	return $this->belongsTo('\App\User', 'created_by');
    }

    public function votes()
    {
    	return $this->hasMany('App\Models\Vote', 'vote_id');
    }
}
