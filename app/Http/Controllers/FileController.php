<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function edit(){

        return view('files',);
    }

    public function show(Request $request){

        $data = $request->only('slug','name','img_path','user_id');

        $data['slug'] = $data['img']->store('profile_images');
        $data['name'] = $data['img']->getClientOriginalName();
        $name = explode('/',$data['slug']);
        $data['img_path'] = $name[0];
        $data['slug'] = $name[1];
        $data['user_id'] = Auth::user()->id;
        return redirect()->route('files.list')->with('success', 'You have successfuli signuped');
    }

    public function store(){
        $data = User::get();
        return view('files.list',[
            'data'=>$data
        ]);
    }

}
