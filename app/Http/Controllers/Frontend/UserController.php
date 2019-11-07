<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TestImage;

class UserController extends Controller
{
    // public function __construct(Guard $auth)
    // {
    //     $this->currentUser = $auth->user();
    // }
    function index(){
        return view('admin.users.user');
    }
    function create(){
        return view('admin.users.create');
    }
    function store(){
        return view('admin.users.store');
    }
    function profile(){
        $auth = Auth::user();
        return view('admin.users.profile',compact('auth'));
    }
    function setting(){
        return view('admin.users.setting');
    }
    function support(){
        return view('admin.users.support');
    }


    function uploadImage(Request $request){
        // open an image file
        $request->validator([
            'name'=>'required',
            'image' => 'required|image|max:2048',
        ]);
        $img = $request->file('image');
        // now you are able to resize the instance
        $img->resize(320, 240);
        $new_name = rand().'.'.$img->getClientOriginalExtension();
        $img->move(public_path('Images'),$new_name);
        $data=array([
            'name'=>$request->name,
            'image'=>$new_name
        ]);
        // TestImage::save($data);
        dd($data);
    }
}