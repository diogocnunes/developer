<div class="mt-16 pt-8 border-t border-slate-100 dark:border-slate-800" x-data="{
    copied: false,
    shareUrl: window.location.href,
    copyToClipboard() {
        navigator.clipboard.writeText(this.shareUrl);
        this.copied = true;
        setTimeout(() => this.copied = false, 2000);
    }
}">
    <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
        <div>
            <h4 class="text-slate-900 dark:text-white font-bold mb-1">Found this interesting?</h4>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Share this case study with your team or hiring manager.</p>
        </div>

        <div class="flex items-center gap-3">
            <a :href="'https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(shareUrl)"
               target="_blank"
               class="p-3 bg-[#0077b5] text-white rounded-lg hover:opacity-90 transition-opacity"
               title="Share on LinkedIn">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>

            <a :href="'https://twitter.com/intent/tweet?url=' + encodeURIComponent(shareUrl) + '&text=' + encodeURIComponent('Check out this Laravel Case Study by @diogonunes')"
               target="_blank"
               class="p-3 bg-black text-white rounded-lg hover:opacity-90 transition-opacity"
               title="Share on X">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>

            <button @click="copyToClipboard"
                    class="flex items-center gap-2 px-4 py-3 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-all font-medium text-sm relative">
                <svg x-show="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
                <svg x-show="copied" class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span x-text="copied ? 'Copied!' : 'Copy Link'"></span>
            </button>
        </div>
    </div>
</div>