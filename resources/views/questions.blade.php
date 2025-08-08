@extends('layouts.app')
@section('ruta', 'questions')
@section('title', 'questions')
@section('subtitle', 'dubtes frequents')
@section('content')




<!-- FAQ -->
<div class="max-w-4xl mx-auto p-6">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-3xl font-extrabold leading-none block w-full py-2 text-transparent bg-clip-text  bg-gradient-to-r from-green-400 to-purple-500 lg:inline"> @yield('title')</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">@yield('subtitle')</p>
  </div>
  <!-- End Title -->

 <div class="max-w-4xl mx-auto p-6">
    <!-- Accordion -->
    <div class="hs-accordion-group">
	
	
	
      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10 active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
          Configuració de Tailwind CSS amb Preline UI
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
		
		
          <p class="text-gray-800 dark:text-neutral-200">
            <style>
    /* Estils inline per a destacar passos */
    .step {
      font-weight: bold;
      color: #3b82f6;
      margin-top: 1rem;
    }
    code {
      background-color: #f3f4f6;
      padding: 2px 4px;
      border-radius: 4px;
      font-size: 0.875rem;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Configuració de Tailwind CSS amb Preline UI</h1>

    <!-- Pas 1 -->
    <div>
      <p class="step">1. Instal·la Tailwind CSS</p>
      <pre class="bg-gray-100 p-3 rounded-md text-gray-700 dark:bg-gray-800 dark:text-gray-200">
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
      </pre>
      <p>Això crearà un fitxer <code>tailwind.config.js</code>.</p>
    </div>

    <!-- Pas 2 -->
    <div>
      <p class="step">2. Instal·la Preline UI</p>
      <pre class="bg-gray-100 p-3 rounded-md text-gray-700 dark:bg-gray-800 dark:text-gray-200">
npm install -D preline
      </pre>
    </div>

    <!-- Pas 3 -->
    <div>
      <p class="step">3. Configura el fitxer <code>tailwind.config.js</code></p>
      <p>Edita el fitxer amb aquesta configuració:</p>
      <pre class="bg-gray-100 p-3 rounded-md text-gray-700 dark:bg-gray-800 dark:text-gray-200">
/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class', // Habilita el mode fosc
  content: [
    './src/**/*.{html,js}', // Directori del teu projecte
    './node_modules/preline/dist/*.js', // Inclou Preline UI
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin'), // Afegeix el plugin de Preline
  ],
};
      </pre>
    </div>

    <!-- Pas 4 -->
    <div>
      <p class="step">4. Crea un fitxer CSS</p>
      <p>Crea un fitxer <code>src/styles.css</code> amb el següent contingut:</p>
      <pre class="bg-gray-100 p-3 rounded-md text-gray-700 dark:bg-gray-800 dark:text-gray-200">
@tailwind base;
@tailwind components;
@tailwind utilities;

@import 'preline'; /* Importa Preline UI */
      </pre>
    </div>

    <!-- Pas 5 -->
    <div>
      <p class="step">5. Configura el mode fosc al teu HTML</p>
      <p>Afegeix la classe <code>dark</code> a la teva etiqueta <code>&lt;html&gt;</code>:</p>
	  
      <pre><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dark"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"UTF-8"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"viewport"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"width=device-width, initial-scale=1.0"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>Tailwind amb Preline UI<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/dist/output.css"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"stylesheet"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"bg-white text-black dark:bg-gray-900 dark:text-white"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-2xl font-bold"</span>&gt;</span>Hola, món!<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mt-2"</span>&gt;</span>Aquest és un exemple de Tailwind amb Preline UI i mode fosc.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code></pre>
	  
    </div>

    <!-- Pas 6 -->
    <div>
      <p class="step">6. Compila el CSS</p>
      <p>Compila el teu fitxer CSS amb Tailwind:</p>
      <pre class="bg-gray-100 p-3 rounded-md text-gray-700 dark:bg-gray-800 dark:text-gray-200">
npx tailwindcss -i ./src/styles.css -o ./dist/output.css --watch
      </pre>
    </div>

    <!-- Pas 7 -->
    <div>
      <p class="step">7. Afegeix un botó per canviar el mode fosc</p>
      <p>Pots afegir aquest botó per permetre als usuaris canviar de tema:</p>
	  
 <pre>
 <code id="htmlViewer" style="color:rgb(248, 248, 242); font-weight:400;background-color:rgb(43, 43, 43);background:rgb(43, 43, 43);display:block;padding: .5em;"><span style="color:rgb(255, 160, 122); font-weight:400;">&lt;<span style="color:rgb(255, 160, 122); font-weight:400;">button</span>
  <span style="color:rgb(255, 160, 122); font-weight:400;">onclick</span>=<span style="color:rgb(171, 227, 56); font-weight:400;">&quot;document.documentElement.classList.toggle(&#x27;dark&#x27;)&quot;</span>
  <span style="color:rgb(255, 160, 122); font-weight:400;">class</span>=<span style="color:rgb(171, 227, 56); font-weight:400;">&quot;px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg&quot;</span>&gt;</span>
  Canvia el Mode Fosc
<span style="color:rgb(255, 160, 122); font-weight:400;">&lt;/<span style="color:rgb(255, 160, 122); font-weight:400;">button</span>&gt;</span></code></pre>
	 
	 
    </div>
  </div>
          </p>
		  
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-two">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
          My team has credits. How do we use them?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
          <p class="text-gray-800 dark:text-neutral-200">
            Once your team signs up for a subscription plan. This is where we sit down, grab a cup of coffee and dial in the details.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-three">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
          How does Preline's pricing work?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
          <p class="text-gray-800 dark:text-neutral-200">
            Our subscriptions are tiered. Understanding the task at hand and ironing out the wrinkles is key.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-four">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
          How secure is Preline?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
          <p class="text-gray-800 dark:text-neutral-200">
            Protecting the data you trust to Preline is our first priority. This part is really crucial in keeping the project in line to completion.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-five">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
          How do I get access to a theme I purchased?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
          <p class="text-gray-800 dark:text-neutral-200">
            If you lose the link for a theme you purchased, don't panic! We've got you covered. You can login to your account, tap your avatar in the upper right corner, and tap Purchases. If you didn't create a login or can't remember the information, you can use our handy Redownload page, just remember to use the same email you originally made your purchases with.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-six">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
          Upgrade License Type
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
          <p class="text-gray-800 dark:text-neutral-200">
            There may be times when you need to upgrade your license from the original type you purchased and we have a solution that ensures you can apply your original purchase cost to the new license purchase.
          </p>
        </div>
      </div>
    </div>
    <!-- End Accordion -->
  </div>
</div>
<!-- End FAQ -->

@stop