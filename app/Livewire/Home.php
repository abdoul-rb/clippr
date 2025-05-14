<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\UrlEnricher;
use App\Models\Bookmark;
use App\Models\Tag;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public $search = '';

    public $selectedTags = [];

    public function toggleTag($tagId)
    {
        if (in_array($tagId, $this->selectedTags)) {
            $this->selectedTags = array_diff($this->selectedTags, [$tagId]);
        } else {
            $this->selectedTags[] = $tagId;
        }
    }

    public function render(UrlEnricher $enricher)
    {
        $query = Bookmark::query()->orderBy('relevance', 'desc');

        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('url', 'like', '%' . $this->search . '%');
        }

        if ($this->selectedTags) {
            $query->whereHas('tags', function ($query) {
                $query->whereIn('tags.id', $this->selectedTags);
            });
        }

        $bookmarks = $query->paginate(12);

        $tags = Tag::get();

        return view('livewire.home', compact('bookmarks', 'tags'))->extends('layouts.app');
    }
}
