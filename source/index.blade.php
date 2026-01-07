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
                <h3 class="text-indigo-200 font-bold uppercase text-[10px] tracking-[0.2em] mb-4 text-center md:text-left">Research & Development</h3>
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="max-w-md text-center md:text-left">
                        <h2 class="text-3xl font-bold mb-4">Inside the Lab: Shadow Context Orchestration</h2>
                        <p class="text-indigo-100 text-sm leading-relaxed mb-6">
                            See how I’m leveraging Gemini 3 and ZSH scripts to build AI environments with deep context and total security for mission-critical systems.
                        </p>
                        <a href="/lab" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-indigo-600 font-bold rounded-xl hover:bg-indigo-50 transition-all">
                            Enter the Lab
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                    <div class="hidden lg:block w-48 h-32 bg-indigo-500/30 rounded-2xl border border-indigo-400/50 backdrop-blur-sm p-4 rotate-3 group-hover:rotate-0 transition-transform duration-500">
                        <div class="space-y-2 opacity-60">
                            <div class="h-1.5 w-full bg-white rounded"></div>
                            <div class="h-1.5 w-4/5 bg-white rounded"></div>
                            <div class="h-1.5 w-2/3 bg-white rounded"></div>
                        </div>
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