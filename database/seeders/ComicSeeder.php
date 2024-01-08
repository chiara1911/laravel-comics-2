<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     //vado a prendere l'array comincs nel db.php
     public function run()
     {
        //
        $data = config("db.comics");
        // dd($data);
        foreach($data as $value){
            $newComic = new Comic();
            $newComic ->title = $value["title"];
            $newComic ->description = $value["description"];
            $newComic ->thumb = $value["thumb"];
            $newComic-> price = $value["price"];
            $newComic->sale_date = $value["sale_date"];
            $newComic->series = $value["series"];
            $newComic->type = $value["type"];
            $newComic->save();
        }
     }
}
