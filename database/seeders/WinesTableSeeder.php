<?php

namespace Database\Seeders;
use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withOptions(['verify' => false])->get('https://api.sampleapis.com/wines/reds');
        $items = $response->json();
        foreach ($items as $data) {
            $newWine = new Wine();
            $newWine->winery   = $data["winery"];
            $newWine->wine     = $data["wine"];
            $newWine->rating   = $data["rating"]['average'];
            $newWine->location = $data["location"];
            $newWine->image    = $data["image"];
            $newWine->save();
        }
        

    }
}
