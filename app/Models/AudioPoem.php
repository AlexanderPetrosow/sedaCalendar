<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioPoem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_tm',
        'name_ru',
        'filename',
        'status'
    ];
}
