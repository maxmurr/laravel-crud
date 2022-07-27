<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = Storage::get('artists-data.csv');
        $contents = explode("\n", $contents);
        $_ = array_shift($contents); // Artist,Genres,Songs,Popularity,Link

        $this->command->getOutput()->progressStart(count($contents));
        foreach ($contents as $content) {
            if ($content == "") continue;
            $columns = explode(",", $content);
            if ($columns[0] == 'NA' or $columns[1] == 'NA'
                or $columns[2] == 'NA' or $columns[3] == 'NA'
                or $columns[4] == 'NA') continue;
            $artist = new Artist();
            $artist->name = $columns[0];
            $artist->genres = $columns[1];
            $artist->songs = $columns[2];
            $artist->popularity = $columns[3];
            $artist->link = "https://www.vagalume.com.br" . $columns[4];
            $artist->save();
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
