<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tag;
class CountPostsByTagId extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = ' tag:count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Number of articles by tag id';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tag_id = $this->argument('id');
        if($tag_id) {
            $articles=Tag::find($tag_id)->articles()->count(); 
            $this->info('Number of articles by tag id');
            $this->info($articles);
         } else {
            $this->info('No articles');
         }
        return 0;
    }
}
