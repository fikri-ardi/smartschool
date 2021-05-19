<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name'=>'Fikri Ardi',
            'email'=>'fikriardi@mail.com',
            'password'=>bcrypt('passfikri'),
            'role'=>'siswa'
        ]);
    }
}
