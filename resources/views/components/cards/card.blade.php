@props([
    'title' => '',
    'url' => '',
    'description' => '',
])

<li
    class="group relative flex flex-col items-start bg-neutral-900 border border-neutral-800 rounded-xl p-6 transition-all hover:ring-1 hover:ring-neutral-700">
    <div class="flex items-center gap-2 leading-none font-semibold tracking-tight">
        <img alt="Coolify favicon" loading="lazy" width="20" height="20" decoding="async" data-nimg="1"
            class="rounded-sm" style="color:transparent"
            src="https://www.google.com/s2/favicons?domain=www.coolify.io&amp;sz=128">

        <h2 class="text-base font-semibold text-zinc-100">
            {{-- <div
            class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 opacity-0 sm:-inset-x-6 sm:rounded-2xl bg-zinc-800/50 border-border/40 bg-muted/20 hover:bg-muted/30 group-hover:border-ring/20 ring-ring/8 flex h-full flex-col rounded-lg border p-6 shadow-sm transition-all hover:ring-[3px]">
        </div> --}}
            <a href="{{ $url }}">
                <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                <span class="relative z-10">
                    {!! $title !!}
                </span>
            </a>
        </h2>
    </div>

    <p class="relative z-10 mt-2 text-sm text-zinc-400">
        {!! str()->words($description, 10) !!}
    </p>

    <p class="relative z-10 mt-6 flex text-sm font-medium transition group-hover:text-teal-500 text-zinc-200">
        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none">
            <path
                d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z"
                fill="currentColor"></path>
        </svg>
        <span class="ml-2">{{ str_replace(['http://', 'https://'], '', $url) }}</span>
    </p>
</li>
