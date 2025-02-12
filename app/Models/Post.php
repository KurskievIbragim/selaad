<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'posts';


    public  function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public  function author() {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
    public  function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
