<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aroma;

class AromasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayAromas = config('aromi');

        foreach($arrayAromas as $curAroma) {
            Aroma::create(['aromi' => $curAroma]);
        }
    }
}
