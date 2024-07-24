<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    const BOORADOR =1;
    const PUBLICADO =2;

    protected $fillable = ['name', 'slug', 'extract', 'body', 'status', 'user_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function user (){
        return $this->belongsTo(User::class);
    }

    public function tags (){
        return $this->belongsToMany(tag::class);
    }
    public function images (){

        return $this->morphMany(Image::class, 'imageable');

    }

    use HasFactory;
}
