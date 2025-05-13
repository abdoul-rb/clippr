<?php

namespace App\Console\Commands;

use App\Models\Bookmark;
use App\Models\Tag;
use Illuminate\Console\Command;

class ImportBookmarks extends Command
{
    protected $signature = 'import:bookmarks {file=bookmarks.json}';

    protected $description = 'Importe les bookmarks par défaut dans la base de données';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('file');
        $path = "data/$filename";

        $bookmarks = json_decode(file_get_contents(resource_path($path)), true);

        $bar = $this->output->createProgressBar(count($bookmarks));
        $bar->start();

        foreach ($bookmarks as $item) {
            $existingBookmark = Bookmark::where('url', $item['url'])->first();

            if (! $existingBookmark) {
                $bookmark = Bookmark::create([
                    'title' => $item['title'],
                    'url' => $item['url'],
                ]);

                foreach ($item['tags'] as $slug) {
                    $tag = Tag::where('slug', $slug)->first();

                    if ($tag) {
                        $bookmark->tags()->attach($tag->id);
                    } else {
                        $this->warn("Tag '{$slug}' non trouvé");
                    }
                }

                $bar->advance();
            }
        }

        $bar->finish();

        $this->newLine(2);
        $this->info('Importation des bookmarks terminée avec succès !');

        return Command::SUCCESS;
    }
}
