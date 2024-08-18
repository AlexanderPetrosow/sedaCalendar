<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    
    public function __invoke(){
        if($this->middleware('auth')){
            return redirect()->route('admin.home');
        }else{
            return redirect('/login');
        }
    }
}
