<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $data=User::all();
        return view('admin.users.user',compact($data));
    }
    function create(){
        return view('admin.users.create');
    }
    function store(){
        return view('admin.users.store');
    }
    function profile($id){
        return view('admin.users.profile',['user' => User::findOrFail($id)]);
    }
    function setting(){
        return view('admin.users.setting');
    }
    function support(){
        return view('admin.users.support');
    }
}
