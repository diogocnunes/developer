<section id="projects" class="py-20 bg-slate-50 dark:bg-slate-900/50 border-t border-slate-200 dark:border-slate-800 transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-16 md:text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">
                Mission Critical Systems
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                Selected works demonstrating high-availability architectures and complex domain logic.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @include('_components.project_section', [
                'title' => 'EU e-Evidence Integration',
                'badge' => 'Cybersecurity',
                'stack' => ['Laravel', 'Reverse Engineering', 'Security'],
                'link' => '/projects/judicial-data-exchange',
                'slot' => 'A pioneer integration with the European e-EDES network. Solved complex API interoperability challenges through reverse engineering to enable secure digital evidence exchange across EU borders.'
            ])

            @include('_components.project_section', [
                'title' => 'IQOS Club Modernization',
                'badge' => 'Enterprise',
                'stack' => ['PHP 8.3', 'Laravel Nova 4', 'Quasar'],
                'link' => '/projects/iqos-club',
                'slot' => 'Led the technical overhaul of a major loyalty platform. Updated core architecture to PHP 8.3 and Laravel 11, focusing on API performance and developer experience.'
            ])
        </div>
    </div>
</section>
