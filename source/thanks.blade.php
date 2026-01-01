@extends('_layouts.main', ['title' => 'Message Sent | Diogo Nunes'])

@section('body')
    <section class="flex flex-col items-center justify-center py-32 px-6 text-center">
        <div class="mb-8 flex items-center justify-center w-20 h-20 bg-emerald-100 dark:bg-emerald-900/30 rounded-full">
            <svg class="w-10 h-10 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-4 tracking-tight">
            Message Received!
        </h1>

        <p class="max-w-md text-xl text-slate-600 dark:text-slate-400 mb-10 leading-relaxed">
            Thanks for your contact! I received your message and I'll answer in 24 to 48 hours.
        </p>

        <div class="flex flex-col sm:flex-row gap-4">
            <a href="/"
               class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg shadow-indigo-500/30 transition-all">
                Return Home
            </a>
            <a href="https://www.linkedin.com/in/diogocnunes/"
               target="_blank"
               class="px-8 py-3 bg-white dark:bg-slate-800 text-slate-900 dark:text-white font-semibold rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">
                Connect on LinkedIn
            </a>
        </div>
    </section>
@endsection