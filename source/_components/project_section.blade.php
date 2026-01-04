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
                @php
                    $techLower = strtolower($tech);
                @endphp
                <div title="{{ $tech }}" class="w-8 h-8 rounded-full bg-white dark:bg-slate-700 border-2 border-slate-100 dark:border-slate-800 flex items-center justify-center p-1.5 shadow-sm">
                    @if(str_contains($techLower, 'laravel') && !str_contains($techLower, 'nova'))
                        <svg class="text-[#FF2D20]" viewBox="0 0 24 24" fill="currentColor"><path d="M24,11.4c0-2.4-1.2-3.5-3.5-3.5h-1.3V3.5c0-2.4-1.2-3.5-3.5-3.5H3.5C1.2,0,0,1.2,0,3.5v17c0,2.4,1.2,3.5,3.5,3.5h17c2.4,0,3.5-1.2,3.5-3.5V11.4z M17.2,1.7c1.3,0,1.7,0.4,1.7,1.7v4.3h-7.6V1.7H17.2z M1.7,20.5V3.5c0-1.3,0.4-1.7,1.7-1.7h5.9v17c0,1.3,0.4,1.7,1.7,1.7h9.2c1.3,0,1.7-0.4,1.7-1.7v-11h1.7v11c0,1.3-0.4,1.7-1.7,1.7H3.5C2.1,22.2,1.7,21.8,1.7,20.5z"/></svg>
                    @elseif(str_contains($techLower, 'vue'))
                        <svg class="text-[#41B883]" viewBox="0 0 24 24" fill="currentColor"><path d="M24,1.6L12,22.4L0,1.6h4.8L12,14L19.2,1.6H24z"/></svg>
                    @elseif(str_contains($techLower, 'php'))
                        <svg class="text-[#777BB4]" viewBox="0 0 24 24" fill="currentColor"><path d="M12.1,12.1c0,1-0.8,1.8-1.8,1.8H9V10.3h1.3C11.3,10.3,12.1,11.1,12.1,12.1z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12S5.4,0,12,0S24,5.4,24,12z M13.8,12.1c0-2-1.6-3.5-3.5-3.5H7.3v7.1H9v-1.8h1.3C12.2,13.8,13.8,12.3,13.8,12.1z"/></svg>
                    @elseif(str_contains($techLower, 'nova'))
                        <svg class="text-[#4099DE]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                    @elseif(str_contains($techLower, 'redis'))
                        <svg class="text-[#D82C20]" viewBox="0 0 24 24" fill="currentColor"><path d="M12,0L1.6,4.2v15.5L12,24l10.4-4.2V4.2L12,0z M18.7,17.3l-6.7,2.7l-6.7-2.7V6.7l6.7-2.7l6.7,2.7V17.3z"/></svg>
                    @elseif(str_contains($techLower, 'quasar'))
                        <svg class="text-[#1976D2]" viewBox="0 0 24 24" fill="currentColor"><path d="M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12s12-5.4,12-12S18.6,0,12,0z M12,19.2c-4,0-7.2-3.2-7.2-7.2s3.2-7.2,7.2-7.2s7.2,3.2,7.2,7.2S16,19.2,12,19.2z M14.4,9.6h-4.8v4.8h4.8V9.6z"/></svg>
                    @elseif(str_contains($techLower, 'security') || str_contains($techLower, 'reverse'))
                        <svg class="text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    @else
                        <svg class="text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
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
