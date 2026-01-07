@extends('_layouts.main')

@section('body')
    @include('_components.hero')
    @include('_components.certification')

    <div class="bg-slate-50 dark:bg-slate-800/20 border-y border-slate-100 dark:border-slate-800">
        @include('_components.experience-section')
    </div>

    @include('_components.projects-section')

    <section class="py-20 max-w-4xl mx-auto px-6">
        <div class="p-8 md:p-12 bg-indigo-600 rounded-3xl text-white shadow-xl shadow-indigo-500/20 relative overflow-hidden group">
            <div class="relative z-10">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4">
                    <h3 class="text-indigo-200 font-bold uppercase text-[10px] tracking-[0.2em]">Research & Open Source</h3>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-indigo-500 text-white border border-indigo-400">
                    NEW PACKAGE AVAILABLE
                </span>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="max-w-md text-center md:text-left">
                        <h2 class="text-3xl font-bold mb-4">Inside the Lab: ai-shadow-vault</h2>
                        <p class="text-indigo-100 text-sm leading-relaxed mb-6">
                            Explore my newly released open-source tool for secure AI context orchestration. Learn how I use ZSH and Gemini 3 to boost developer velocity.
                        </p>
                        <div class="flex flex-wrap justify-center md:justify-start gap-4">
                            <a href="/lab" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-indigo-600 font-bold rounded-xl hover:bg-indigo-50 transition-all">
                                Read Case Study
                            </a>
                            <a href="https://github.com/diogocnunes/ai-shadow-vault" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-500 text-white font-bold rounded-xl hover:bg-indigo-400 transition-all border border-indigo-400">
                                View on GitHub
                            </a>
                        </div>
                    </div>
                    <div class="hidden lg:block">
                        <svg class="w-32 h-32 text-indigo-400/30 rotate-12 group-hover:rotate-0 transition-transform duration-700" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('_components.competencies_section')
    @include('_components.education_section')

    @include('_components.tech_stack')

    @include('_components.footer')
@endsection