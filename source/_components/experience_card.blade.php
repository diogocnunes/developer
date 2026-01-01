<div class="relative pl-8 pb-12 last:pb-0 group">
    <div class="absolute left-0 top-0 h-full w-px bg-slate-200 dark:bg-slate-700 group-last:h-8"></div>

    <div class="absolute left-[-4px] top-1.5 h-2 w-2 rounded-full bg-indigo-500 ring-4 ring-white dark:ring-slate-900"></div>

    <div class="flex flex-col gap-1">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white leading-none">
                {{ $role }}
            </h3>
            <span class="text-sm font-medium text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">
                {{ $period }}
            </span>
        </div>

        <p class="text-indigo-600 dark:text-indigo-400 font-semibold flex items-center gap-2">
            {{ $company }}
            <span class="text-slate-300 dark:text-slate-600">•</span>
            <span class="text-slate-500 dark:text-slate-400 font-normal text-sm">{{ $location }}</span>
        </p>

        <p class="mt-4 text-slate-600 dark:text-slate-400 leading-relaxed italic border-l-2 border-indigo-500/30 pl-4">
            {{ $impact }}
        </p>

        <div class="mt-4 flex flex-wrap gap-2">
            @foreach($tags as $tag)
                <span class="text-xs font-mono bg-slate-50 dark:bg-slate-800/50 text-slate-600 dark:text-slate-400 border border-slate-200 dark:border-slate-700 px-2 py-1 rounded">
                    {{ $tag }}
                </span>
            @endforeach
        </div>
    </div>
</div>