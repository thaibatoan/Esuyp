<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'author_id', 'title', 'description', 'thumbnail_url', 'content_url', 'pages',
    ];

    public function author() {
        return $this->hasOne(User::class, 'id');
    }
}
