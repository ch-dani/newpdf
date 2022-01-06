<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"madnan",
            "email"=>"adzdeveloper@gmail.com",
            "password"=>Hash::make("password"),
            
        ]);
    }
}
