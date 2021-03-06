<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' =>"Saravana",
            'phonenumber' => '7708454539',
            'password' => Hash::make('1412'),
        ]);


        User::factory()->count(5)->create();
    }
}
