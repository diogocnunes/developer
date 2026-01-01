<div class="p-6 rounded-2xl bg-white dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 shadow-sm hover:shadow-md hover:border-indigo-500/30 transition-all duration-300">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ $title }}</h3>
        @if(isset($badge))
            <span class="px-2 py-1 text-xs rounded-md bg-indigo-100 text-indigo-700 dark:bg-indigo-900 dark:text-indigo-300 font-mono">
                {{ $badge }}
            </span>
        @endif
    </div>
    
    <p class="text-slate-600 dark:text-slate-300 mb-6 text-sm leading-relaxed">
        {{ $slot }}
    </p>

    <div class="border-t border-slate-100 dark:border-slate-700/50 pt-4 flex justify-between items-center">
        <div class="flex -space-x-2">
            @foreach($stack as $tech)
                <div title="{{ $tech }}" class="w-8 h-8 rounded-full bg-white dark:bg-slate-700 border-2 border-slate-100 dark:border-slate-800 flex items-center justify-center p-1.5 shadow-sm">
                    @if(strtolower($tech) == 'laravel')
                        <svg class="text-red-500" viewBox="0 0 24 24" fill="currentColor"><path d="M8.354 1.104L1.5 5.053v13.894l6.854 3.95 6.854-3.95V5.053L8.354 1.104z"/></svg>
                    @elseif(strtolower($tech) == 'vue')
                        <svg class="text-emerald-500" viewBox="0 0 24 24" fill="currentColor"><path d="M24,1.6L12,22.4L0,1.6h4.8L12,14L19.2,1.6H24z"/></svg>
                    @else
                        <svg class="text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    @endif
                </div>
            @endforeach
        </div>
        
        @if(isset($link))
        <a href="{{ $link }}" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 flex items-center gap-1">
            Case Study
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
        @endif
    </div>
</div>
