<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link rel="manifest" href="/assets/images/site.webmanifest">
    <meta name="theme-color" content="#4f46e5">

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $page->getUrl() }}">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:image" content="https://diogonunes.dev/assets/images/social-card.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ $page->title }}">
    <meta property="twitter:description" content="{{ $page->description }}">
    <meta property="twitter:image" content="https://diogonunes.dev/assets/images/social-card.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @if (!$page->production)
        <script type="module" src="http://localhost:5173/{{ '@' }}vite/client"></script>
    @endif
    <link rel="stylesheet" href="{{ $page->vite('css/main.css') }}">
    <script type="module" src="{{ $page->vite('js/main.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body
        x-data="{
        darkMode: document.documentElement.classList.contains('dark'),
        toggleTheme() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }"
        class="antialiased min-h-screen bg-white text-slate-900 dark:bg-slate-900 dark:text-slate-100 transition-colors duration-300">

<div class="min-h-screen flex flex-col">
    <header class="py-6 container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <a href="/" class="text-xl font-bold tracking-tight text-slate-900 dark:text-white group">
            <span class="text-indigo-600 group-hover:text-indigo-500">~/</span>diogo-nunes
        </a>

        <button @click="toggleTheme()" class="p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors text-slate-600 dark:text-slate-400 focus:outline-none">
            <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </button>
    </header>

    <main class="flex-1">
        @yield('body')
    </main>

    <footer class="py-12 text-center text-sm text-slate-500 dark:text-slate-400 border-t border-slate-100 dark:border-slate-800">
        <p>&copy; {{ date('Y') }} Diogo Cambraia Nunes. Built with Jigsaw, Tailwind & Laravel tools.</p>
    </footer>
</div>
</body>
</html>