<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 100)->create();
        factory(Article::class, 100)->create();
    }
}
