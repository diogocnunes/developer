@extends('_layouts.main', ['title' => 'The Lab: AI Engineering & Orchestration'])

@section('body')
    <article class="py-20 max-w-4xl mx-auto px-6">
        <header class="mb-16">
            <h1 class="text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight mb-6">
                Lab<span class="text-indigo-600">.</span>
            </h1>
            <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed max-w-2xl">
                An experimental space where I document engineering workflows, AI agent orchestration, and architectural patterns for the Laravel ecosystem.
            </p>
        </header>

        <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl overflow-hidden shadow-2xl">
            <div class="p-8 md:p-12 border-b border-slate-100 dark:border-slate-800 flex flex-col md:flex-row justify-between items-start gap-6">
                <div>
                <span class="inline-block px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-300 text-[10px] font-bold uppercase tracking-widest rounded-full mb-4">
                    Active Research
                </span>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Shadow Context Orchestration</h2>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-500 text-[10px] font-mono rounded">Gemini 3 Flash</span>
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-500 text-[10px] font-mono rounded">OpenCode</span>
                </div>
            </div>

            <div class="p-8 md:p-12">
                <div class="prose dark:prose-invert max-w-none space-y-8">
                    <section>
                        <h3 class="text-xl font-bold">The Vision</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            As a Senior Lead, my goal isn't just to use prompts, but to architect how AI understands the Laravel 11 ecosystem.
                        </p>
                    </section>

                    <section class="bg-slate-900 rounded-2xl p-6 text-indigo-300 font-mono text-xs shadow-inner">
                        <p class="text-slate-500 mb-4">// ZSH Symlink Automation for Shadow Context</p>
                        <p>ln -s ~/.engineering_vault/laravel_11_rules.md ./.ai_context/rules</p>
                        <p>opencode --agent "gemini-3" --task "/init"</p>
                    </section>

                    <section>
                        <h3 class="text-xl font-bold">Strategic Advantage</h3>
                        <ul class="space-y-4 text-slate-600 dark:text-slate-400">
                            <li class="flex gap-3">
                                <span class="text-indigo-500">✔</span>
                                <span><strong>GovTech Level Security:</strong> Critical instructions remain in a private local Vault, never touching Git history or public prompts.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-indigo-500">✔</span>
                                <span><strong>Deep Alignment:</strong> Agents autonomously map complex dependencies (Nova, Pest, Pinia) for immediate code-style compliance.</span>
                            </li>
                        </ul>
                    </section>

                    <div class="p-8 md:p-12 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/20">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 text-center">Technical Deep Dive</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div>
                                <h4 class="text-indigo-600 font-bold uppercase text-xs tracking-widest mb-4">The "Shadow" Logic</h4>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                                    Common AI tools struggle with large repo density. My ZSH script orchestrates a <strong>Private Engineering Vault</strong>, injecting architectural guidelines via symlinks.
                                </p>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                    This approach ensures <strong>Gemini 3</strong> understands the full context of Laravel 11, Pest, and Nova 4 without exposing sensitive logic to Git.
                                </p>
                            </div>

                            <div>
                                <h4 class="text-indigo-600 font-bold uppercase text-xs tracking-widest mb-4">Autonomous Discovery</h4>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                                    Through the <code>/init</code> agent routine, the system auto-detects complex dependencies like <strong>Syncfusion</strong> and <strong>Pinia</strong>.
                                </p>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                    It's not just prompting; it's <strong>Agentic Orchestration</strong> designed for mission-critical software environments.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="p-8 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 text-center">
                <p class="text-sm text-slate-500 mb-4">Interested in implementing this workflow or discussing AI orchestration at Laracon EU?</p>
                <a href="mailto:diogocn@proton.me?subject=Lab%20Networking" class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition-all shadow-lg">
                    Let's book a technical talk
                </a>
            </div>
        </div>
    </article>
@endsection