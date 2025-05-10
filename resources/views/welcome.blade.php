@extends('layouts.app')

@section('title', __('Accueil'))

@section('content')
    @include('partials.nav')

    <div class="relative isolate bg-[#100D08] min-h-screen w-full flex flex-col items-center py-12 px-4">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="stroke-gray-700 absolute inset-0 h-full w-full [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2" width="200" height="200" x="100%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M130 200V.5M.5 .5H200" fill="none"></path>
                    </pattern>
                </defs><svg x="100%" y="-1" class="overflow-visible fill-neutral-900/10">
                    <path d="M-470.5 0h201v201h-201Z" stroke-width="0"></path>
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2)">
                </rect>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 py-4 lg:px-0">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-3">
                {{ __('Rédecouvre tes favoris autrement') }}
            </h1>
            <p class="text-gray-300 max-w-2xl">
                {{ __('Retrouve facilement tes favoris rangés comme dans un catalogue. Leurs dépendances sont automatiquement ajoutées.') }}
            </p>

            <!-- Search bar -->
            <div class="my-10 w-full flex flex-col md:flex-row items-center justify-between gap-3">
                <div class="flex items-center gap-2">
                    <div class="flex-1 flex items-center w-full">
                        <input type="text" placeholder="Search projects..."
                            class="w-full rounded bg-[#23272e] border border-[#23272e] px-4 py-1.5 text-white focus:outline-none" />
                    </div>
                    <button
                        class="flex items-center gap-1 bg-[#23272e] border border-[#23272e] px-4 py-2 rounded text-white font-medium text-sm mt-2 md:mt-0">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 6h18M3 14h18M3 18h18" />
                        </svg>
                        Newest
                    </button>
                </div>

                <div class="flex items-center gap-2">
                    <button type="button"
                        class="inline-flex items-center gap-x-0.5 rounded-md bg-[#212427] border border-[#212427] px-4 py-2 text-xs font-medium text-white">
                        Badge
                    </button>
                </div>
            </div>

            <!-- Cards -->
            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <x-cards.card title="Planetaria" url="https://planetaria.tech"
                    description="Creating technology to empower civilians to explore space on their own terms." />

                <x-cards.card title="Planetaria" url="https://planetaria.tech"
                    description="Creating technology to empower civilians to explore space on their own terms." />

                <x-cards.card title="Planetaria" url="https://planetaria.tech"
                    description="Creating technology to empower civilians to explore space on their own terms." />
            </div>

            <div class="w-full flex gap-4 mt-4 justify-end">
                <button class="bg-[#23272e] border border-[#23272e] text-white px-4 py-2 rounded text-xs">Sponsor
                    spot</button>
                <button class="bg-[#23272e] border border-[#23272e] text-white px-4 py-2 rounded text-xs">Sponsor
                    spot</button>
            </div>
        </div>
    </div>
@endsection
