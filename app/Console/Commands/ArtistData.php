<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtistData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artists:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get artists data from file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $contents = Storage::get('artists-data.csv');
        $contents = explode("\n", $contents);
        $header = array_shift($contents);
        $this->line($header);
        $this->line($contents[0]);
        return 0;
    }
}
