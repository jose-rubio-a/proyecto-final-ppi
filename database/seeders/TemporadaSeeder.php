<?php

namespace Database\Seeders;

use App\Models\Temporada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemporadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Temporada::factory()->count(20)->create();
    }
}
