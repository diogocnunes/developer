@extends('_layouts.main', ['title' => 'Case Study: EU e-Evidence Integration'])

@section('body')
    <article class="py-20 max-w-3xl mx-auto px-6">
        <a href="/#projects" class="text-indigo-600 font-bold mb-8 inline-block transition-transform hover:-translate-x-2">
            ← Back to Portfolio
        </a>

        <header class="mb-12">
            <span class="text-indigo-600 font-bold tracking-widest uppercase text-sm">GovTech / Justice Sector</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white mt-2 mb-6">
                EU e-Evidence Integration
            </h1>
            <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed">
                Architecting a secure, cross-border bridge for digital evidence exchange between Portuguese judicial bodies and the European Union.
            </p>
        </header>

        <div class="prose dark:prose-invert max-w-none space-y-12">
            <section>
                <h2 class="text-2xl font-bold">The Challenge: Blind Interoperability</h2>
                <p>
                    The primary hurdle was integrating the Portuguese Judicial CMS (managed by the Public Prosecutor's Office and PJ) with the European <strong>e-EDES</strong> platform.
                </p>
                <p>
                    The project faced a critical roadblock: <strong>a total lack of official API documentation</strong> for the European Commission's secure protocols. Dealing with highly sensitive criminal data meant there was zero room for error in security or data integrity.
                </p>
            </section>

            <section class="border-l-4 border-indigo-500 pl-6 my-10">
                <h2 class="text-2xl font-bold">Reverse Engineering & Integration</h2>
                <p>
                    Acting as the lead engineer for this integration, I adopted a "black box" approach to solve the connectivity issues:
                </p>
                <ul class="list-disc pl-5 space-y-2">
                    <li><strong>API Mapping:</strong> Performed extensive reverse engineering on communication nodes to understand and map the encrypted data flow.</li>
                    <li><strong>Protocol Bridging:</strong> Developed a custom Laravel gateway to translate internal judicial data into EU-compliant secure packages.</li>
                    <li><strong>Security First:</strong> Implemented AES-256 encryption and immutable audit logging to meet strict international legal standards.</li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl font-bold">The Architected Solution</h2>
                <p>
                    Built on <strong>Laravel 11</strong> and <strong>Oracle DB</strong>, the solution utilized an event-driven architecture to handle asynchronous judicial requests.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                    <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-700">
                        <h4 class="font-bold mb-2 text-indigo-600">Secure Queuing</h4>
                        <p class="text-sm">Reliable message handling ensuring evidence is never lost, even during network instability between international nodes.</p>
                    </div>
                    <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-700">
                        <h4 class="font-bold mb-2 text-indigo-600">Nova Observability</h4>
                        <p class="text-sm">Custom monitoring tools in Laravel Nova for real-time tracking of interoperability health and encrypted transmission logs.</p>
                    </div>
                </div>
            </section>

            <section class="bg-indigo-600 text-white p-8 rounded-2xl shadow-xl shadow-indigo-500/20">
                <h2 class="text-2xl font-bold mb-4 text-white">Technical & Social Impact</h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-200 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span><strong>European Pioneer:</strong> Successfully established Portugal as one of the first countries to achieve full CMS integration with e-Evidence.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-200 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        <span><strong>Digital Transformation:</strong> Replaced high-risk, paper-based manual handovers with a 100% encrypted and automated pipeline.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-indigo-200 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <span><strong>Full Auditability:</strong> Provided immutable records of all data exchanges, crucial for judicial transparency and legal compliance.</span>
                    </li>
                </ul>
            </section>
        </div>

        <footer class="mt-16 pt-8 border-t border-slate-200 dark:border-slate-800">
            @include('_components.social_share')
        </footer>
    </article>
@endsection