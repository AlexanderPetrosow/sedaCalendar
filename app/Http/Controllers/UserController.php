<?php

namespace App\Http\Controllers;

use App\Models\AudioPoem;
use App\Models\Image;
use App\Models\Poem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){

        $poems = Poem::where("status",true)->get();
        $audios = AudioPoem::where('status',true)->get();
        $images = Image::where("status", true)->get();
        
        return view("user", compact("images","audios","poems"));
    }

    public function admins(){
        $admins = User::where("is_admin",0)->get();
        return view("admin.adminControll",compact("admins"));
    }

    public function create(Request $request){
    //    dd($request->all());
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'password' => ['required', 'string', 'min:5', 'confirmed'],
        // ]);

        User::create($request->all());
        return redirect()->route('admin.controll')->with('message', 'successfully created admin');       
    }

    public function showPoem(Poem $poem){
        return view('show-poem',compact('poem'));
    }
}
