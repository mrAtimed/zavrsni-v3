<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('roles')->insert([
            [
                'name' => "Admin",
            ],
            [
                'name' => "User",
            ]
        ]);

        DB::table('users')->insert(
            [
                [
                    'name' => "Hrvoje Krhač",
                    'email' => 'hrvoje.krhac@gmail.com',
                    'password' => Hash::make('password'),
                    "role_id" => 1,
                ],
                [
                    'name' => "Testificate",
                    'email' => 'huh@minecraft.com',
                    'password' => Hash::make('villager'),
                    "role_id" => 2,
                ]
            ]
        );

        DB::table('pages')->insert([
            [
                'name' => "About",
                'slug' => 'about',
                'img' => '/placeholder.jpg',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, <i>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ], [
                'name' => "Testing",
                'slug' => 'role',
                'img' => '',
                'text' => 'Test to check how router will resolve if there are routes with the same <b>slug</b>, and no image set..',
            ]
        ]);

        DB::table('nav_menus')->insert([
            [
                'name' => "About me",
                'page_id' => "1",

            ], [
                'name' => "Testing me",
                'page_id' => "1",

            ]

        ]);
    }
}
