@extends('_layouts.main')

@section('body')
    @include('_components.hero')
    @include('_components.certification')

    <div class="bg-slate-50 dark:bg-slate-800/20 border-y border-slate-100 dark:border-slate-800">
        @include('_components.experience-section')
    </div>

    @include('_components.projects-section')
    @include('_components.competencies_section')
    @include('_components.education_section')

    @include('_components.tech_stack')

    @include('_components.footer')
@endsection