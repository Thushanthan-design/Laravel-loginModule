<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => 'Abc',//Str::random(10),
        'email' => 'Abc@gmail.com',//Str::random(10).'@gmail.com', 
        'password' => Hash::make('test123'),            
        'remember_token' => Str::random(10), ]);

        DB::table('users')->insert(['name' => 'Pqr',//Str::random(10),
        'email' => 'Pqr@gmail.com',//Str::random(10).'@gmail.com', 
        'password' => Hash::make('test123'),            
        'remember_token' => Str::random(10), ]);
        // \App\Models\User::factory(10)->create();

        DB::table("users")->insert(['name'=>'xyz','email'=>'xyz@gmail.com','password'=>Hash::make('test123'),'remember_token'=>Str::random(10),]);
    }
}
