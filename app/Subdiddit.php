<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdiddit extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
        }
}
