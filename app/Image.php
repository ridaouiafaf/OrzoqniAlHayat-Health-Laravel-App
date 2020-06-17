<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'post_id',
        'imgName',
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
