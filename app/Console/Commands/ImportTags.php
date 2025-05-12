<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Tag;
use Illuminate\Console\Command;

class ImportTags extends Command
{
    protected $signature = 'import:tags';

    protected $description = 'Importe les tags par défaut dans la base de données';

    protected array $defaultTags = [
        'Tailwind',
        'AI',
        'Devops',
        'UI',
        'Docs',
        'UX',
        'Projet',
        'Portfolio',
        'Design',
        'Learn',
        'Learning',
        'Tutorials',
        'Tools',
        'Productivity',
        'Utilities',
        'Components',
        'Zen',
        'Focus',
        'Logs',
        'Debug',
        'Monitoring',
        'Hack',
        'Tricks',
        'Home',
        'Freelance',
        'Business',
        'Stream',
    ];

    /**
     * Exécute la commande.
     */
    public function handle(): int
    {
        $this->info('Début de l\'importation des tags par défaut...');

        $bar = $this->output->createProgressBar(count($this->defaultTags));
        $bar->start();

        foreach ($this->defaultTags as $tagName) {
            Tag::create(['name' => $tagName]);

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info('Importation des tags terminée avec succès !');

        return Command::SUCCESS;
    }
} 