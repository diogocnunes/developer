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
            'company' => 'Ministério Público / Polícia Judiciária',
            'role' => 'Senior Full-Stack Developer',
            'period' => '2019 — Present',
            'location' => 'Lisbon, Portugal',
            'tags' => ['Laravel 11', 'Vue.js 3', 'Docker', 'Oracle', 'High Security'],
            'impact' => 'Architecting critical information systems with a focus on data integrity, audit trails, and secure interoperability between judicial entities.'
        ])
        @endcomponent

        @component('_components.experience_card', [
            'company' => 'Philip Morris International',
            'role' => 'Senior Software Engineer',
            'period' => '2016 — 2019',
            'location' => 'Global / Remote',
            'tags' => ['PHP 8', 'Microservices', 'AWS', 'CI/CD'],
            'impact' => 'Led the digital transformation of legacy systems, optimizing supply chain logic and reducing data processing latency by 40% in multi-region deployments.'
        ])
        @endcomponent
    </div>
</section>
