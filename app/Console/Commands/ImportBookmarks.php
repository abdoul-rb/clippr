<?php

namespace App\Console\Commands;

use App\Models\Bookmark;
use App\Models\Tag;
use Illuminate\Console\Command;

class ImportBookmarks extends Command
{
    protected $signature = 'import:bookmarks';

    protected $description = 'Importe les bookmarks par défaut dans la base de données';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $bookmarks = [
            [
                'title' => 'Preline UI',
                'url' => 'https://preline.co/examples.html',
                'tags' => ['tailwind', 'ui', 'components'],
            ],
            [
                'title' => 'Cruip Devspace demo',
                'url' => 'https://preview.cruip.com/devspace/',
                'tags' => ['ui', 'portfolio'],
            ],
            [
                'title' => 'Freebox OS',
                'url' => 'http://mafreebox.freebox.fr/#Fbx.os.app.settings.app',
                'tags' => ['tools', 'tricks'],
            ],
            [
                'title' => "Calculateur d'impôt",
                'description' => "Calculateur d'impôt en ligne",
                'url' => 'https://calculateur-impot.vercel.app/',
                'tags' => ['project'],
            ],
            [
                'title' => "Seloger 224",
                'description' => "Site de vente de biens immobiliers",
                'url' => 'https://seloger224.vercel.app/',
                'tags' => ['project'],
            ],
            [
                'title' => "Create Laravel Package",
                'description' => "Créer un package Laravel",
                'url' => 'https://www.laravelpackage.com/',
                'tags' => ['learning', 'tutorials', 'laravel'],
            ],

        ];

        foreach ($bookmarks as $item) {
            $existingBookmark = Bookmark::where('url', $item['url'])->first();

            if (! $existingBookmark) {
                $bookmark = Bookmark::create([
                    'title' => $item['title'],
                    'url' => $item['url'],
                ]);

                $this->info("{$bookmark->title} créé");

                foreach ($item['tags'] as $slug) {
                    $this->info("Association du tag {$slug}");
                    $tag = Tag::where('slug', $slug)->first();

                    if ($tag) {
                        $bookmark->tags()->attach($tag->id);

                        $this->info("Tag '{$tag->name}' attaché au bookmark '{$bookmark->title}'");
                    } else {
                        $this->warn("Tag '{$slug}' non trouvé");
                    }
                }
            }
        }
    }
}
