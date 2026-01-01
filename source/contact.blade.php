@extends('_layouts.main', ['title' => 'Contact | Diogo Nunes'])

@section('body')
    <section class="py-20 max-w-2xl mx-auto px-6">
        <div class="mb-12">
            <h1 class="text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Get in touch</h1>
            <p class="text-lg text-slate-600 dark:text-slate-400">
                Have a project in mind or just want to chat about Laravel architecture? Drop me a message below.
            </p>
        </div>

        <form action="https://formspree.io/f/mqeapeqd" method="POST" class="space-y-6">
            <input type="hidden" name="_next" value="https://diogonunes.dev/thanks" />
            <div>
                <label for="name" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Full Name</label>
                <input type="text" name="name" id="name" required
                       class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
            </div>

            <div>
                <label for="email" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Email Address</label>
                <input type="email" name="email" id="email" required
                       class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
            </div>

            <div>
                <label for="message" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Your Message</label>
                <textarea name="message" id="message" rows="5" required
                          class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-indigo-500 outline-none transition-all"></textarea>
            </div>

            <input type="text" name="_gotcha" style="display:none" />

            <button type="submit" class="w-full py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/20 transition-all transform hover:-translate-y-1">
                Send Message
            </button>
        </form>
    </section>
@endsection