<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
      public function posts(){
        return $this->hasMany(Post::class,'post_id');
    }
      public function user(){
        return $this->hasMany(User::class);
    }
}
