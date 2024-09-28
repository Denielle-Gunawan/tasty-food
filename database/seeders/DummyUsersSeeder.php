<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'denil',
                'email'=>'admin@gmail.com',
                'level'=>'admin',
                'password'=>bcrypt('admin#123')
            ],
            [
                'name'=>'Ikan mas',
                'email'=>'staff@gmail.com',
                'level'=>'staff',
                'password'=>bcrypt('admin#123')
            ],
            [
                'name'=>'gunawan',
                'email'=>'tamun@gmail.com',
                'level'=>'tamu',
                'password'=>bcrypt('admin#123')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
