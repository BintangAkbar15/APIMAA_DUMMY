<?php

namespace Database\Seeders;

use App\Models\level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        level::create(['name'=>'KING']);
    }
}
