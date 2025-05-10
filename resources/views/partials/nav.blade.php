<nav
    class="sticky top-0 z-40 border-b border-dashed border-white/10 backdrop-blur supports-[backdrop-filter]:bg-dark/10 shadow-xs">
    <div class="max-w-7xl mx-auto px-6 py-4 lg:px-0 flex items-center justify-between">
        <div class="flex items-center gap-6">
            <a href="#" class="flex items-center gap-2 font-bold text-lg text-white">
                <span class="inline-block bg-[#23272e] rounded p-1">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="28" height="28" rx="6" fill="#23272e" />
                        <rect x="5" y="5" width="18" height="18" rx="4" fill="#fff" />
                    </svg>
                </span>
                Clippr
            </a>

            <a href="#" class="text-gray-300 hover:text-white text-sm font-medium">
                Tags
            </a>
        </div>

        <div class="flex items-center gap-3">
            <button class="bg-[#23272e] dark:bg-[#23272e] text-white text-xs px-3 py-1 rounded hover:bg-[#333] mr-2">
                Sponsor spot
            </button>

            <a href="#" class="text-gray-400 hover:text-black dark:hover:text-white mr-2">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.084-.729.084-.729 1.205.084 1.84 1.236 1.84 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.762-1.605-2.665-.305-5.466-1.334-5.466-5.931 0-1.31.469-2.381 1.236-3.221-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.553 3.297-1.23 3.297-1.23.653 1.653.242 2.873.119 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.803 5.624-5.475 5.921.43.372.823 1.102.823 2.222 0 1.606-.014 2.898-.014 3.293 0 .322.216.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                </svg>
            </a>

            <button
                class="bg-black dark:bg-white text-white dark:text-black px-4 py-1 rounded text-sm font-semibold ml-2">
                {{ __('Ajouter') }}
            </button>
        </div>
    </div>
</nav>
