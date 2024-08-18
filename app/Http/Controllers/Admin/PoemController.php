<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PoemRequest;
use App\Models\Poem;
use Illuminate\Http\Request;

class PoemController extends Controller
{
    public function index(){
        $poems = Poem::all();
        return view("admin.poem",compact("poems"));        
    }

    public function store(PoemRequest $request){
        
        Poem::create($request->all());
        return redirect()->route('admin.poem');
    }

    public function edit(Poem $poem){
        $poem['showEdit'] = true;
        $poems = Poem::all();
        return view('admin.poem',compact('poem','poems'));
    }

    public function update(PoemRequest $request){
        $poem = Poem::find($request->id);
        $poem->update($request->all());
        $poems = Poem::all();
        return view('admin.poem',compact('poems'))->with('success', 'Poem updated successfully');
    }

    public function active(Poem $poem){
        if($poem->status == '1'){
            $poem->status = '0';
        }else{
            $poem->status = '1';
        }
            $poem->save();
        return redirect()->route('admin.poem');
    }


    public function destroy(Poem $poem){
        $poem->delete();
        return redirect()->route('admin.poem');
    }
}
