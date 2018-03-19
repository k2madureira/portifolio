<?php

namespace App;


class Post extends Model
{
    //

    public function user () { //$posts->user

    	return $this->belongsTo(User::class);
    }
}
