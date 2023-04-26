<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
     

    protected $fillable = [
        'user_id',
        'active',
        'categorie',
        'title',
        'description',
        'price',
        'image_path',
        'region',
        'city',
        'number_whats_app',
];


public function user(){ // propertie
        return $this->belongsTo(User::class);
    } 

  public function likes(){
    return $this->hasMany(Like::class,'post_id');
        }  


public function images_post(){
  return $this->hasMany(Images_post::class , 'post_id');

}
}
