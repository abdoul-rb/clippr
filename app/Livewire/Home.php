<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\UrlEnricher;
class Home extends Component
{
    public function render(UrlEnricher $enricher)
    {
        $data = $enricher->enrich('https://tailwindcss.com/');

        // dd($data);

        return view('livewire.home')->extends('layouts.app');
    }
}
