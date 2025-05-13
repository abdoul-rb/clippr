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

        dd($bookmarks);

        $bookmarks = [
            [
                'title' => 'Preline UI',
                'description' => "Free Tailwind CSS resources as building blocks for websites and web applications.",
                'url' => 'https://preline.co/examples.html',
                'tags' => ['tailwind', 'ui', 'components'],
            ],
            [
                'title' => 'Cruip Devspace demo',
                'description' => "Exemple de portfolio avec Tailwind CSS",
                'url' => 'https://preview.cruip.com/devspace/',
                'tags' => ['ui', 'portfolio'],
            ],
            [
                'title' => 'Freebox OS',
                'description' => "Interface de configuration de la Freebox",
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
