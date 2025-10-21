<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            'name' => 'An De Li',
            'email' => 'andeli@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->profile()->create([
            'phone' => '08123456665',
            'bio' => 'Dosen'
        ]);
        
    }
}
