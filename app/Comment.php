<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment_text',
        'twitter_handle',
        'tweet_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    // ];
}
