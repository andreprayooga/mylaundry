<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Andre Prayogo',
            'email' => 'andreprayoga187@gmail.com',
            'phone' => '085155451874',
            'password' => Hash::make('12345'),
            'avatar' => 'default.jpg',
        ]);
    }
}
