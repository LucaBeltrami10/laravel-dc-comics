<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $comics = config('comics');

        foreach ($comics as $key => $comic) {
            $comicModel = new Comic();

            $comicModel->title = $key;
            $comicModel->title = $comic['title'];
            $comicModel->description = $comic['description'];
            $comicModel->thumb = $comic['thumb'];
            $comicModel->price = $comic['price'];
            $comicModel->series = $comic['series'];
            $comicModel->sale_date = $comic['sale_date'];
            $comicModel->type = $comic['type'];
            $comicModel->save();
        }
    }
}
