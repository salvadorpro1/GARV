<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'salvador',
            'username' => 'yonin',
            'email' => 'salvadorpro1',
            'email_verified_at' => now(),
            'password' => Hash::make('duque2001'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Agrega más registros si es necesario
    }
}
