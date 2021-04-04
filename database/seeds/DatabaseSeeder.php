<?php

use Illuminate\Database\Seeder;
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
       $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('admin@123'),
            'remember_token' => null,
            'created_at'     => '2019-04-15 19:13:32',
            'updated_at'     => '2019-04-15 19:13:32'
        ]];

        User::insert($users);
    }
}
