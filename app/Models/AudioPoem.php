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
        'audio',
        'status',
        'order'
    ];


    public function getAudio(){
        if(file_exists(public_path('/storage/uploads/audio/'.$this->audio)) && !is_null($this->audio)){
            return asset('/storage/uploads/audio/'.$this->audio);
        }else{
            return null;
        }
    }
}
