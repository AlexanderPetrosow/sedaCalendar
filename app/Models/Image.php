<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'status',
        'order'
    ];

    public function getImage(){
        if(file_exists(public_path('/storage/uploads/gallery/'.$this->image)) && !is_null($this->image)){
            return asset('/storage/uploads/gallery/'.$this->image);
        }else{
            return asset('icons/logo.png');
        }
    }
}
 