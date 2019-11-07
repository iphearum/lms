<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Book;
use App\Category;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $roleUsers = factory(User::class, 3)->create();
        $addBook = factory(Book::class, 20)->create();
        // $addBook = factory(Category::class)->create();
    }
}