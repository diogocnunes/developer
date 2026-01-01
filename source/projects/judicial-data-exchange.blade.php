@extends('_layouts.main', ['title' => 'Case Study: Judicial Data Exchange'])

@section('body')
    <article class="py-20 max-w-3xl mx-auto px-6">
        <a href="/" class="text-indigo-600 font-bold mb-8 inline-block">← Back to Portfolio</a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-6">
            Judicial Data Exchange Platform
        </h1>

        <div class="prose dark:prose-invert max-w-none space-y-8">
            <section>
                <h2 class="text-2xl font-bold">The Challenge</h2>
                <p>Facilitating the secure, real-time exchange of highly sensitive criminal data between the Public Prosecutor's Office and the Criminal Police (PJ). The system required 100% auditability and zero-downtime availability.</p>
            </section>

            <section>
                <h2 class="text-2xl font-bold">The Architected Solution</h2>
                <p>I led the development using **Laravel 11** and **Oracle DB**, implementing an event-driven architecture. We utilized custom Laravel Nova dashboards for magistrate oversight and granular RBAC (Role-Based Access Control) to ensure legal compliance.</p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Implementation of AES-256 encryption for data at rest.</li>
                    <li>Integration with European e-Evidence protocols.</li>
                    <li>Automated testing suite using Pest and Laravel Dusk.</li>
                </ul>
            </section>

            <section class="bg-indigo-50 dark:bg-slate-800 p-8 rounded-2xl border border-indigo-100 dark:border-slate-700">
                <h2 class="text-2xl font-bold text-indigo-900 dark:text-indigo-300">Technical Impact</h2>
                <p class="text-indigo-800 dark:text-slate-300">The platform successfully integrated 4 different judicial bodies, reducing evidence transfer latency by **65%** and eliminating paper-based manual handovers.</p>
            </section>
        </div>
        @include('_components.social_share')
    </article>
@endsection