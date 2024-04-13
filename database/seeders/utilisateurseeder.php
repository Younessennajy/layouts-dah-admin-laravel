<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\utilisateursmodel;

class utilisateurseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        utilisateursmodel::factory()->count(100)->create();
    }
}
