<?php

declare(strict_types=1);

namespace App\Services;

use Embed\Embed;
use Illuminate\Support\Facades\Log;

class UrlEnricher
{
    private Embed $embed;

    public function __construct()
    {
        $this->embed = new Embed();
    }

    /**
     * Enrichit une URL avec ses métadonnées
     *
     * @param string $url L'URL à enrichir
     * @return array Les métadonnées enrichies
     */
    public function enrich(string $url): array
    {
        try {
            $info = $this->embed->get($url);
            
            return [
                'title' => $info->title,
                'description' => $info->description,
                'image' => $info->image,
                'favicon' => $info->favicon,
            ];
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'enrichissement de l\'URL: ' . $url, [
                'error' => $e->getMessage()
            ]);

            return [
                'title' => null,
                'description' => null,
                'image' => null,
                'favicon' => null,
            ];
        }
    }
}