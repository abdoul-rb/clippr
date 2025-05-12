<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
class Tag extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function (Tag $tag) {
            $tag->slug = Str::slug($tag->name);
        });

        static::updating(function (Tag $tag) {
            $tag->slug = Str::slug($tag->name);
        });
    }

    /**
     * Les bookmarks associés au tag.
     */
    public function bookmarks(): BelongsToMany
    {
        return $this->belongsToMany(Bookmark::class)->withTimestamps();
    }
} 