<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'isUser',
                'Username' => 'isUser',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345'),
                'photo' => 'admin1.jpg',
                'roles_id' => 1
            ],
            [
                'name' => 'isAdmin',
                'Username' => 'isAdmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'photo' => 'admin.jpg',
                'roles_id' => 2
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
