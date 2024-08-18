<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        // dd(App::currentLocale());
        return view("user");
    }

    public function admins(){
        $admins = User::where("is_admin",0)->get();
        return view("admin.adminControll",compact("admins"));
    }

    public function create(Request $request){
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create($request->all());
        return redirect()->route('admin.controll')->with('message', 'successfully created admin');       
    }
}
