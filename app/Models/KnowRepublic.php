<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowRepublic extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $fillable = ['title', 'type', 'content', 'image_main', 'slides', 'published_at'];

}
