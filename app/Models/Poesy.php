<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poesy extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'poesy';

    protected $fillable = [
        'title',
        'content',
        'is_popular',
        'author_id',
        'user_id',
        'category_id',
        'lead',
        'published_at'
    ];


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
