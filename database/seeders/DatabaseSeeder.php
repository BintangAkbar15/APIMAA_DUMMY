<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\karyawan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        karyawan::create([
            'fullname'=>'Muhammad Bintang Akbar',
            'telp'=>'082125805172',
            'email'=>'bintangakbar154@gmail.com',
            'date_of_birth'=> now(),
            'education'=>'smakndsadasd',
            'address'=>'puri2p7',
            'nik'=>'1022010857000',
            'timezone'=>'gmt++++',
        ]);
    }
}
