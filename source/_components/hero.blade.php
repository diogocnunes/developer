<section class="flex flex-col items-center justify-center py-20 px-6 text-center ...">
    @include('_components.status_indicator')

    <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 dark:text-white tracking-tight mb-2">
        Diogo Cambraia <span class="text-indigo-600">Nunes</span>
    </h1>

    <div class="mb-8 flex items-center gap-2 text-indigo-600 dark:text-indigo-400">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <span class="text-sm font-bold uppercase tracking-widest">
            Laravel Certified Developer
        </span>
    </div>

    <p class="max-w-2xl text-xl text-slate-600 dark:text-slate-400 mb-10 leading-relaxed">
        Senior Full-Stack Engineer specializing in <span class="text-slate-900 dark:text-white font-semibold underline decoration-indigo-500">high-security Laravel ecosystems</span>.
        Building mission-critical solutions for government and global enterprises.
    </p>

    <div class="flex flex-col sm:flex-row gap-4 mb-12">
        <a href="#projects"
           class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg shadow-indigo-500/30 transition-all transform hover:-translate-y-1">
            View My Work
        </a>
        <a href="/contact"
           class="px-8 py-3 bg-white dark:bg-slate-800 text-slate-900 dark:text-white font-semibold rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all transform hover:-translate-y-1">
            Contact Me
        </a>
    </div>

    <div class="flex flex-wrap items-center justify-center gap-y-4 gap-x-6 text-sm text-slate-400 font-medium">
        <div class="flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            <span>Lisbon, Portugal 🇵🇹</span>
        </div>

        <span class="hidden md:block w-1 h-1 rounded-full bg-slate-300"></span>

        <a href="https://www.linkedin.com/in/diogocnunes/" target="_blank" class="hover:text-indigo-500 transition-colors flex items-center gap-2">
            LinkedIn
        </a>

        <span class="hidden md:block w-1 h-1 rounded-full bg-slate-300"></span>

        <a href="https://github.com/diogocnunes/developer" target="_blank" class="hover:text-indigo-500 transition-colors flex items-center gap-2">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            Site Source
        </a>
    </div>
</section>