<section>
    <h2 class="text-2xl font-bold">The Challenge: Blind Interoperability</h2>
    <p>The primary hurdle was integrating the Portuguese Judicial CMS with the European e-EDES platform without official API documentation. This required a deep-dive into the European Commission's secure protocols.</p>
</section>

<section>
    <h2 class="text-2xl font-bold">The Architected Solution</h2>
    <p>Acting as the sole developer for this integration, I performed **reverse engineering** on the e-Evidence communication nodes to map the encrypted data flow. I then built a robust Laravel-based bridge that handles:</p>
    <ul class="list-disc pl-5 space-y-2">
        <li>Secure asynchronous message queuing for evidence transfer.</li>
        <li>Immutable audit trails for legal compliance in multiple jurisdictions.</li>
        <li>Custom Laravel Nova tools for monitoring real-time connectivity with EU nodes.</li>
    </ul>
</section>

<section class="bg-indigo-50 dark:bg-slate-800 p-8 rounded-2xl border border-indigo-100 dark:border-slate-700">
    <h2 class="text-2xl font-bold text-indigo-900 dark:text-indigo-300">Technical Impact</h2>
    <p class="text-indigo-800 dark:text-slate-300">Successfully established Portugal as one of the first EU countries to achieve full CMS integration. The solution replaced manual, high-risk data handovers with a fully automated, encrypted pipeline.</p>
</section>