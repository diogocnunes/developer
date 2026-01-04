@extends('_layouts.main', ['title' => 'Case Study: IQOS Club Modernization'])

@section('body')
    <article class="py-20 max-w-3xl mx-auto px-6">
        <a href="/#projects" class="text-indigo-600 font-bold mb-8 inline-block transition-transform hover:-translate-x-2">
            ← Back to Portfolio
        </a>

        <header class="mb-12">
            <span class="text-indigo-600 font-bold tracking-widest uppercase text-sm">Enterprise / Philip Morris</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white mt-2 mb-6">
                IQOS Club Modernization
            </h1>
            <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed">
                Leading the architectural evolution of a high-traffic loyalty platform for the Canary Islands and Andorra.
            </p>
        </header>

        <div class="prose dark:prose-invert max-w-none space-y-12">
            <section>
                <h2 class="text-2xl font-bold">The Challenge</h2>
                <p>
                    The IQOS Club platform, a vital loyalty system for Philip Morris International, was running on a legacy stack (**PHP 7.4 and Laravel Nova 2**). As the system grew in complexity and user base, the technical debt started to hinder development speed and security standards.
                </p>
                <p>
                    The mission was to modernize the entire core without disrupting the service for thousands of users and multiple third-party API integrations.
                </p>
            </section>

            <section class="border-l-4 border-indigo-500 pl-6 my-10">
                <h2 class="text-2xl font-bold">Liderança & Mentoria</h2>
                <p>
                    As the **Team Leader**, I didn't just write code. I was responsible for:
                </p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>**Task Orchestration:** Managing the sprint backlog and unblocking team members.</li>
                    <li>**Technical Mentorship:** Guiding the team through the breaking changes of Laravel 11 and Nova 4.</li>
                    <li>**Code Quality:** Reviewing complex pull requests to ensure the migration followed PSR standards and SOLID principles.</li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl font-bold">The Architected Solution</h2>
                <p>
                    We executed a phased migration to a bleeding-edge stack: **PHP 8.3, Laravel 11, and Laravel Nova 4**.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                    <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-700">
                        <h4 class="font-bold mb-2 text-indigo-600">Upgrade Core</h4>
                        <p class="text-sm">Refactored legacy models and resources to utilize PHP 8.3 features like constructor property promotion and readonly properties.</p>
                    </div>
                    <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-700">
                        <h4 class="font-bold mb-2 text-indigo-600">Nova 4 Customization</h4>
                        <p class="text-sm">Rebuilt custom fields and tools to match the new Nova 4 bridge, significantly improving the admin experience (UX).</p>
                    </div>
                </div>
            </section>

            <section class="bg-indigo-600 text-white p-8 rounded-2xl shadow-xl shadow-indigo-500/20">
                <h2 class="text-2xl font-bold mb-4 text-white">Impacto Técnico & Negócio</h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-200 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>**Future-Proofing:** Eliminated the risks associated with EOL (End-of-Life) software versions.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-200 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        <span>**Performance:** Achieved faster response times in API endpoints due to the transition from PHP 7.4 to 8.3.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-200 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <span>**Developer Velocity:** The move to Laravel 11 reduced the team's boilerplate code, allowing for faster feature delivery.</span>
                    </li>
                </ul>
            </section>
        </div>

        <footer class="mt-16 pt-8 border-t border-slate-200 dark:border-slate-800">
            @include('_components.social_share')
        </footer>
    </article>
@endsection