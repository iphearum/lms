<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About LMS
## To Install
$php artisan key:generate

$composer install

$php artisan migrate

## About Role and Permission
role:
1. admin
2. owner

permission:
1. create
2. delete

role have permission:
1. admin -> [create, delete]
2. owner -> [create]


## Set Role and Permission
This comment must be use in controller like HomeController

Role::create(['name'=>['admin','librarian']]); // crate role

Permission::create(['name'=>['create','delete']]); // create permission

$permission = Permission::create(['name'=>'create_post']); // create permission

$role = Role::findById(1); // find role by id

$permission = Permission::findById(1); // file permission by id

$role->givePermissionTo($permission); // set permission to role

$permission->removeRole($role); // remove role from permission

auth()->user()->givePermissionTo($permission);// put permission to user

auth()->user()->assignRole($role); // put role to user

return auth()->user()->revokePermissionTo(2);

return auth()->user()->removeRole(1);

return auth()->user()->givePermission($permission);

return view('home');

auth()->user()->givePermission('edit_post');

$user = User::role('admin')->get();

$user->can('create','delete');

return $users;

$user = Auth()->user()->name;

auth()->user()->hasAllRoles(Role::all());

## Screeenshot

<img width="1656" alt="Screen Shot 2019-06-12 at 3 48 41 PM" src="https://user-images.githubusercontent.com/38729044/59337559-0ea03000-8d2b-11e9-9135-8e8145d5a227.png">
<img width="1656" alt="Screen Shot 2019-06-12 at 3 49 52 PM" src="https://user-images.githubusercontent.com/38729044/59337566-11028a00-8d2b-11e9-88f8-07b0637d88a0.png">
<img width="1656" alt="Screen Shot 2019-06-12 at 3 53 26 PM" src="https://user-images.githubusercontent.com/38729044/59337582-18c22e80-8d2b-11e9-989b-e83c1e3e7602.png">
<img width="1656" alt="Screen Shot 2019-06-12 at 3 53 37 PM" src="https://user-images.githubusercontent.com/38729044/59337592-1d86e280-8d2b-11e9-8823-9d4b60bcfa6c.png">
<img width="1656" alt="Screen Shot 2019-06-12 at 3 53 44 PM" src="https://user-images.githubusercontent.com/38729044/59337598-211a6980-8d2b-11e9-9173-d07b210e32e8.png">
<img width="1656" alt="Screen Shot 2019-06-12 at 3 53 53 PM" src="https://user-images.githubusercontent.com/38729044/59337605-24155a00-8d2b-11e9-84e8-110249bc40d1.png">

Not finish yet
