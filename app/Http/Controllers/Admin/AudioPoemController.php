<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AudioPoemRequest;
use App\Models\AudioPoem;
use Illuminate\Support\Facades\Storage;

class AudioPoemController extends Controller
{
    public function index(){
        $audios = AudioPoem::all();

        return view("admin.audioPoem", compact("audios"));
        
    }

    public function store(AudioPoemRequest $request){
        $random = hexdec(uniqid());
        $filename = $random . '.' . $request->audio->extension();
        Storage::disk('audio_uploads')->putFileAs('', $request->audio,$filename);

        AudioPoem::create([
            'name_tm' => $request->name_tm,
            'name_ru' => $request->name_ru,
            'audio' => $filename,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.audioPoem')->with('success','Songs created successfully!');
    }

    public function active(AudioPoem $audioPoem){
        if($audioPoem->status == '1'){
            $audioPoem->status = '0';
        }else{
            $audioPoem->status = '1';
        }
            $audioPoem->save();
        return redirect()->route('admin.audioPoem');
    }

    public function destroy(AudioPoem $audioPoem){
        if ($audioPoem->audio) {
            $this->removeFile($audioPoem->audio, 'audio');
        } 

        $audioPoem->delete();
        return redirect()->route('admin.audioPoem');
    }

}
