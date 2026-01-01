@extends('_layouts.main')

@section('body')
    {{-- 1. Hero: Quem sou e Pitch inicial --}}
    @include('_components.hero')

    {{-- 2. Autoridade: O selo de Certificação imediatamente --}}
    @include('_components.certification')

    {{-- 3. Skills: Core Competencies (Seção A) --}}
    @include('_components.competencies_section')

    {{-- 4. Experiência: Onde apliquei as competências (Timeline) --}}
    <div class="bg-slate-50 dark:bg-slate-800/20 border-y border-slate-100 dark:border-slate-800">
        @include('_components.experience-section')
    </div>

    {{-- 5. Projetos: Resultados e Case Studies (Seção C) --}}
    @include('_components.projects-section')

    {{-- 6. Educação & Outros: (Seção B) --}}
    @include('_components.education_section')

    {{-- 7. Footer: O Call to Action --}}
    @include('_components.footer')
@endsection