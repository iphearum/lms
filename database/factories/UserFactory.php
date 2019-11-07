<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Book;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Contracts\Permission;
use App\Category;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Book::class, function (Faker $faker) {
    $status = ['instock','outstock','comming soon'];
    $category = [1,2,3,4];
    // $date = rand(date_create());
    $sex = ['pdf','image','text'];
    return [
        'name' => $faker->name,
        'auth' => $faker->name,
        // 'auth' => $faker->unique()->safeEmail,
        'category_id'=> $category[rand(0, 3)],
        'identifier' => $faker->name,
        'stocks'=>$category[rand(0, 3)],
        'sex'   => $sex[rand(0,2)],
        'status'=> $status[rand(0, 2)],
        'date'  => '2019',
        'description' => 'Lorem50',
        'image' => '1044043033.png',
    ];
});
$factory->define(Category::class, function (Faker $faker) {
    $category = ['Mathematic','Physic','Computer Science','Chemical'];
    return [
        'name'=> $category[3],
    ];
});