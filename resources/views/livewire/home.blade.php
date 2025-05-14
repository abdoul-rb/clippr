@section('title', __('Accueil'))

<div class="relative isolate bg-[#100D08] min-h-screen w-full flex flex-col items-center py-5 px-4">
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

    <div class="max-w-7xl mx-auto px-6 py-4 lg:px-0 w-full">
        <!-- Search bar -->
        <div class="mb-6 w-full flex flex-col md:flex-row items-center justify-between gap-3">
            <div class="flex flex-1 items-center gap-2">
                <div class="relative w-full sm:max-w-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="text-white/50 absolute top-2.5 left-2.5 h-4 w-4">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input type="search" wire:model.live.debounce.300ms="search"
                        class="bg-transparent text-white placeholder:text-white/50 border border-white/20 rounded-lg px-3 py-2 text-sm shadow-xs focus-visible:outline-hidden w-full pr-4 pl-8"
                        placeholder="Search projects..." aria-label="Search projects">
                </div>

                <div x-data="{ dropdown: false }">
                    <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-lg text-white text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-transparent border border-white/20 px-3 py-2"
                        type="button">Columns
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div>

            </div>
        </div>

        <div class="flex items-center flex-wrap gap-2">
            @foreach ($tags as $tag)
                <button type="button" wire:click="toggleTag({{ $tag->id }})" @class([
                    'inline-flex items-center gap-x-0.5 rounded-md bg-[#212427] border border-[#212427] px-4 py-2 text-xs font-medium text-white cursor-pointer',
                    'ring-1 ring-white' => in_array($tag->id, $selectedTags),
                ])>
                    {{ $tag->name }}
                </button>
            @endforeach
        </div>

        <!-- Cards -->
        <div class="mt-12 grid gap-x-4 gap-y-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($bookmarks as $bookmark)
                <x-cards.card title="{{ $bookmark->title }}" url="{{ $bookmark->url }}"
                    description="{{ $bookmark->description }}" />
            @endforeach

            <div class="col-span-full">
                {{ $bookmarks->links() }}
            </div>
        </div>
    </div>
</div>
