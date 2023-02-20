<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'email' => 'test@example.com',
             'role' => 'admin123'
         ]);
    }
}
