<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		// Role::create(['name'=>'owner']); // crate role
		// Permission::create(['name'=>'delete']); // create permission
		// $permission = Permission::create(['name'=>'create_post']); // create permission
		// $user = User::findById(7); //
		// $role = Role::findById(2); // find role by id
		// $permission = Permission::findById(1); // file permission by id
		// $role->givePermissionTo($permission); // set permission to role
		// $permission->removeRole($role); // remove role from permission
		// auth()->user()->givePermissionTo($permission);// put permission to user
		// auth()->user()->assignRole($role); // put role to user
		// $user->assignRole($role); // put role to user
		// return auth()->user()->revokePermissionTo(2);
		// return auth()->user()->removeRole(1);
		// return auth()->user()->givePermission($permission);
		// return view('home');
		// auth()->user()->givePermission('edit_post');

		// $user = User::role('admin')->get();
		// $user->can('create','delete');
		// return $users;
		// $user = Auth()->user()->name;
		// auth()->user()->hasAllRoles(Role::all());

		return view('home', compact('users'));
	}
}
