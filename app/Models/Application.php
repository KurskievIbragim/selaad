<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Application extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];


    protected $fillable = [
        'user_id',
        'name',
        'last_name',
        'email',
        'title',
        'text',
        'user_tail_file',
        'surtFile',
        'publication_type',
        'user_locality',
        'user_school',
        'user_class',
    ];
}
