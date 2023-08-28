<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics_data = config('data.comics');

        foreach ($comics_data as $data) {

            // Normalize data
            $data['price'] = str_replace('$', '', $data['price']);
            $data['artists'] = implode(', ', $data['artists']);
            $data['writers'] = implode(', ', $data['writers']);

            // Create record
            $comic = new Comic();
            $comic->fill($data);
            $comic->save();
        }
    }
}
