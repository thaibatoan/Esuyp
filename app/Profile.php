<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    //
    protected $fillable = [
        'display_name', 'sex', 'address', 'avatar_url'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
