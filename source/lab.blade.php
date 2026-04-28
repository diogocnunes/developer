@extends('_layouts.main', ['title' => 'The Lab: AI Shadow Vault'])

@section('body')
    <article class="py-20 max-w-4xl mx-auto px-6">
        <header class="mb-16">
            <h1 class="text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight mb-6">
                Lab<span class="text-indigo-600">.</span>
            </h1>
            <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed max-w-2xl">
                An experimental space where I ship open-source tools for the Laravel and AI engineering ecosystem.
            </p>
        </header>

        <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl overflow-hidden shadow-2xl">
            <div class="p-8 md:p-12 border-b border-slate-100 dark:border-slate-800 flex flex-col md:flex-row justify-between items-start gap-6">
                <div>
                <span class="inline-block px-3 py-1 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 text-[10px] font-bold uppercase tracking-widest rounded-full mb-4">
                    Open Source
                </span>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white">AI Shadow Vault</h2>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-500 text-[10px] font-mono rounded">Shell-First CLI</span>
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-500 text-[10px] font-mono rounded">Homebrew</span>
                </div>
            </div>

            <div class="p-8 md:p-12">
                <div class="prose dark:prose-invert max-w-none space-y-8">
                    <section>
                        <h3 class="text-xl font-bold">Keep AI Adapter Files Out of Git</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            AI Shadow Vault is a shell-first CLI that stores <strong>CLAUDE.md</strong>, <strong>AGENTS.md</strong>, and <strong>GEMINI.md</strong> in a machine-level vault and links them into each project only when needed. Your repo stays clean, your adapters stay reusable, and your setup stays deterministic across Git worktrees.
                        </p>
                    </section>

                    <section class="bg-slate-900 rounded-2xl p-6 text-indigo-300 font-mono text-xs shadow-inner">
                        <p class="text-slate-500 mb-4"># Install via Homebrew</p>
                        <p>brew tap diogocnunes/tap</p>
                        <p>brew install ai-vault</p>
                        <p class="mt-4 text-slate-500"># Link adapters to your project</p>
                        <p>ai-vault init</p>
                    </section>

                    <div class="mt-12 p-6 bg-indigo-50 dark:bg-indigo-900/20 rounded-2xl border border-indigo-100 dark:border-indigo-800 flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="flex items-center gap-4 text-center md:text-left">
                            <div class="p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm">
                                <svg class="w-8 h-8 text-slate-900 dark:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Get Started</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Install in seconds. Link adapters to any project.</p>
                            </div>
                        </div>
                        <a href="https://github.com/diogocnunes/ai-shadow-vault" target="_blank" class="px-6 py-3 bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold rounded-xl hover:opacity-90 transition-all flex items-center gap-2">
                            View on GitHub
                            <img src="https://img.shields.io/github/stars/diogocnunes/ai-shadow-vault?style=flat&color=4f46e5" alt="GitHub Stars" class="h-4">
                        </a>
                    </div>

                    <section>
                        <h3 class="text-xl font-bold">Why It Matters</h3>
                        <ul class="space-y-4 text-slate-600 dark:text-slate-400">
                            <li class="flex gap-3">
                                <span class="text-indigo-500">✔</span>
                                <span><strong>Clean Repos:</strong> Adapters live outside the repository. No CLAUDE.md or AGENTS.md cluttering your commit history.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-indigo-500">✔</span>
                                <span><strong>Worktree-Safe Identity:</strong> Stable project identity shared across all Git worktrees from the same vault.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-indigo-500">✔</span>
                                <span><strong>Stack Snapshot:</strong> Auto-detects your tech stack from repository manifests and feeds it into adapter context.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-indigo-500">✔</span>
                                <span><strong>Linked Knowledge Base:</strong> <code>.ai/docs</code> and <code>.ai/plans</code> symlinked from the vault, excluded from Git without touching <code>.gitignore</code>.</span>
                            </li>
                        </ul>
                    </section>

                    <div class="p-8 md:p-12 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/20">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 text-center">How It Works</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div>
                                <h4 class="text-indigo-600 font-bold uppercase text-xs tracking-widest mb-4">Vault Architecture</h4>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                                    Adapters, docs, and plans live in an <strong>external vault</strong> on your machine. Each project gets symlinks that point into that vault.
                                </p>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                    The <code>ai-vault init</code> command resolves your project root, derives a stable identity, generates adapters, and links <code>.ai/docs</code> and <code>.ai/plans</code> — all without committing a single file.
                                </p>
                            </div>

                            <div>
                                <h4 class="text-indigo-600 font-bold uppercase text-xs tracking-widest mb-4">Three Commands</h4>
                                <ul class="space-y-3 text-slate-600 dark:text-slate-400 text-sm">
                                    <li class="flex gap-2">
                                        <code class="text-indigo-600 dark:text-indigo-400 font-mono text-xs whitespace-nowrap">ai-vault install</code>
                                        <span>Setup wizard &amp; global config</span>
                                    </li>
                                    <li class="flex gap-2">
                                        <code class="text-indigo-600 dark:text-indigo-400 font-mono text-xs whitespace-nowrap">ai-vault init</code>
                                        <span>Link project to vault</span>
                                    </li>
                                    <li class="flex gap-2">
                                        <code class="text-indigo-600 dark:text-indigo-400 font-mono text-xs whitespace-nowrap">ai-vault update</code>
                                        <span>Upgrade to latest version</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="p-8 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 text-center">
                <p class="text-sm text-slate-500 mb-4">Interested in implementing this workflow or discussing AI orchestration?</p>
                <a href="mailto:diogocn@proton.me?subject=Lab%20Networking" class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition-all shadow-lg">
                    Let's book a technical talk
                </a>
            </div>
        </div>
    </article>
@endsection