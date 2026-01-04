<section id="experience" class="py-20 md:py-32 max-w-4xl mx-auto px-6">
    <div class="mb-16 md:text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">
            Professional Experience
        </h2>
        <p class="text-slate-600 dark:text-slate-400 text-lg max-w-2xl mx-auto">
            A track record of engineering secure, scalable solutions for government and enterprise sectors.
        </p>
    </div>

    <div class="space-y-4">
        @component('_components.experience_card', [
            'company' => 'PDMFC (Senior Engineer & Team Leader)',
            'role' => 'Outsourced to PGR & Judicial Police',
            'period' => '2017 — Present',
            'location' => 'Lisbon, Portugal',
            'tags' => ['Laravel 11', 'PHP 8.3', 'Team Lead', 'GovTech', 'Oracle'],
            'impact' => 'Leading engineering teams to build secure, high-stakes judicial systems. Expert in Laravel Nova customization and end-to-end CI/CD pipeline management.'
        ])
        @endcomponent

        @component('_components.experience_card', [
            'company' => 'Philip Morris International',
            'role' => 'Senior Developer (via PDMFC)',
            'period' => '2022 — 2025',
            'location' => 'Spain / Remote',
            'tags' => ['Legacy Migration', 'Laravel 11', 'Nova 4', 'API Integration'],
            'impact' => 'Orchestrated the architectural migration of the IQOS Club loyalty system from legacy PHP 7.4 to a modern Laravel 11 stack, ensuring 24/7 availability.'
        ])
        @endcomponent
    </div>
</section>
