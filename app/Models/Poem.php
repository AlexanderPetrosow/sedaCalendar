<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_tm',
        'name_ru',
        'text_tm',
        'text_ru',
        'author_tm',
        'author_ru',
        'status',
        'order'
    ];
}
