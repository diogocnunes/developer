<section class="flex flex-col items-center justify-center py-20 px-6 text-center bg-white dark:bg-slate-900 transition-colors duration-300">

    @include('_components.status_indicator')

    <div class="mb-6 inline-flex items-center px-4 py-1.5 rounded-full border border-indigo-100 bg-indigo-50 dark:bg-indigo-900/30 dark:border-indigo-500/30">
        <span class="flex h-2 w-2 rounded-full bg-indigo-500 mr-2"></span>
        <span class="text-sm font-medium text-indigo-700 dark:text-indigo-300">
            Laravel Certified Developer since 2019
        </span>
    </div>

    <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 dark:text-white tracking-tight mb-4">
        Diogo Cambraia <span class="text-indigo-600">Nunes</span>
    </h1>

    <p class="max-w-2xl text-xl text-slate-600 dark:text-slate-400 mb-10 leading-relaxed">
        Senior Full-Stack Engineer specializing in <span class="text-slate-900 dark:text-white font-semibold underline decoration-indigo-500">high-security Laravel ecosystems</span>.
        Building mission-critical solutions for government and global enterprises.
    </p>

    <div class="flex flex-col sm:flex-row gap-4">
        <a href="#projects"
           class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg shadow-indigo-500/30 transition-all">
            View My Work
        </a>
        <a href="https://github.com/diogocnunes/developer"
           target="_blank"
           class="px-8 py-3 bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white font-semibold rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">
            See the code for this site
        </a>
    </div>

    <div class="mt-12 flex items-center gap-6 text-slate-400">
        <a href="https://www.linkedin.com/in/diogocnunes/" class="hover:text-indigo-500 transition-colors">LinkedIn</a>
        <span class="w-1 h-1 rounded-full bg-slate-300"></span>
        <a href="/contact" class="px-8 py-3 bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white font-semibold rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-200 dark:hover:bg-slate-700 transition-all flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            Contact Me
        </a>
        <span class="w-1 h-1 rounded-full bg-slate-300"></span>
        <span>Lisbon, Portugal 🇵🇹</span>
    </div>
</section>