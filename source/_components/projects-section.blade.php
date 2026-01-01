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
                'title' => 'Judicial Data Exchange',
                'badge' => 'GovTech',
                'stack' => ['Laravel', 'Vue', 'Redis'],
                'link' => '/projects/judicial-data-exchange',
                'slot' => 'A secure, encrypted platform facilitating real-time data exchange between the Public Prosecutor\'s Office and Criminal Police bodies. Engineered to handle sensitive case files with granular permission controls and immutable audit logging.'
            ])

            @include('_components.project_section', [
                'title' => 'Enterprise Resource Planning',
                'badge' => 'Enterprise',
                'stack' => ['PHP 8', 'Docker', 'AWS'],
                'link' => '#',
                'slot' => 'Custom ERP modules developed for multinational compliance (PMI). Streamlined supply chain logic and integrated with SAP endpoints.'
            ])
        </div>
    </div>
</section>
