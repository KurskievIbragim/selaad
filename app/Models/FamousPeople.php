<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamousPeople extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'famous_people';

    protected $fillable = [
        'title',
        'lead',
        'bio',
        'image_main',
        'category_id'
    ];


    public  function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
