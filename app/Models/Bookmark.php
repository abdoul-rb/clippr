<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Services\UrlEnricher;
class Bookmark extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array<string>
     */
    protected $fillable = [
        'title',
        'url',
        'description',
        'metadata',
        'active',
    ];

    /**
     * Les attributs qui doivent être castés.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'metadata' => 'array',
        'active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Bookmark $bookmark) {
            if (empty($bookmark->title) || empty($bookmark->description)) {
                $enricher = app(UrlEnricher::class);
                $data = $enricher->enrich($bookmark->url);

                $bookmark->title = $bookmark->title ?? $data['title'];
                $bookmark->description = $bookmark->description ?? $data['description'];
                $bookmark->metadata = array_merge($bookmark->metadata ?? [], ['image' => $data['image']]);
            }
        });
    }

    /**
     * Les tags associés au bookmark.
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
} 