<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Book;
use App\Category;

class ListBookController extends Controller
{
	public function index(){
		// Role::create(['name'=>'admin']); // crate role
        // Permission::create(['name'=>'create']); // create permission
        // $permission = Permission::create(['name'=>'create_post']); // create permission
        // $role = Role::findById(1); // find role by id
        // $permission = Permission::findById(1); // file permission by id
        // $role->givePermissionTo($permission); // set permission to role
        // $permission->removeRole($role); // remove role from permission
        // auth()->user()->givePermissionTo($permission);// put permission to user
        // auth()->user()->assignRole($role); // put role to user
        // return auth()->user()->revokePermissionTo(2);
        // return auth()->user()->removeRole(1);
        // return auth()->user()->givePermission($permission);
        // return view('home');
        // auth()->user()->givePermission('edit');

        // $users = User::role('writer')->get();
        // return $users;
		// $user = Auth()->user()->name;
		// return view('home');

        $data = Book::latest()->paginate(24);
        $category = Category::all();
        // $q = Input::get ( 'q' );
        // $find = Book::where('name','LIKE','%'.$q.'%')->orWhere('auth','LIKE','%'.$q.'%')->get();
        // if(count($find) > 0)
        //     return view('welcome')->withDetails($data)->withQuery ( $q );
        // else 
            return view('welcome', compact('data','category'))
			->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show($id)
	{
		$data = Book::findOrFail($id);
		return view('frontend.view', compact('data'));
    }
    public function byCategory($id){
        $data = Book::where('category_id',$id)->get();
        $category = Category::all();
        return view('frontend.view_in_category',compact('data','category'));
    }
}
