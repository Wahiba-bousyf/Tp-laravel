<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnnonceSedeer extends Seeder
{
    public function run(): void
    {
        Annonce::factory()->count(10)->create();
    }
}
