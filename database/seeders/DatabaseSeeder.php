<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
   
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin12@gmail.com';
        $user->password = '228878ra';
        $user->role = 'admin';

        $user->save();
    }
}