<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // create laravel react auth administrator user.
        \App\Models\User::factory()->create([
            'name'  => 'administrator',
            'email' => 'administrator@laravel-react-auth.devops'
        ]); // ->assignRole('administrator');

        // create laravel react auth manager user.
        \App\Models\User::factory()->create([
            'name'  => 'manager',
            'email' => 'manager@laravel-react-auth.devops'
        ]); // ->assignRole('manager');

        // create laravel react auth guest user.
        \App\Models\User::factory()->create([
            'name'  => 'guest',
            'email' => 'guest@laravel-react-auth.devops'
        ]); // ->assignRole('guest');
    }
}
