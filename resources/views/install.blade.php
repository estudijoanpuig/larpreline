@extends('layouts.app')
@section('title', 'Instal·lació Laravel amb Livewire, Preline i Filament')
@section('subtitle', 'tot el que em cal aprendre')
@section('content')	




<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

<!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-3xl font-extrabold leading-none block w-full py-2 text-transparent bg-clip-text  bg-gradient-to-r from-green-400 to-purple-500 lg:inline"> @yield('title')</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">@yield('subtitle')</p>
  </div>
  <!-- End Title -->

   <div class="max-w-4xl mx-auto p-6">
        

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">1. Instal·lar Laravel</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>Assegura't que tens <strong>Composer</strong> instal·lat (<a target="_blank"href="https://getcomposer.org/" class="text-blue-600 underline">get composer.org</a>).</li>
				<li>Assegura't que tens <strong>Node</strong> instal·lat (<a target="_blank"href="https://nodejs.org/en/" class="text-blue-600 underline">get nodejs.org/en/</a>).</li>
                <li>Instal·la Laravel des de l'instal·lador global:
                    <pre class="bg-gray-100 p-2 rounded mt-2">composer global require laravel/installer</pre>
                </li>
                <li>Crea un nou projecte Laravel:
                    <pre class="bg-gray-100 p-2 rounded mt-2">laravel new nom-del-projecte</pre>
                </li>
                <li>Accedeix al directori del projecte:
                    <pre class="bg-gray-100 p-2 rounded mt-2">cd nom-del-projecte</pre>
                </li>
                <li>Configura el fitxer <code>.env</code> i genera la clau d'aplicació:
                    <pre class="bg-gray-100 p-2 rounded mt-2">php artisan key:generate</pre>
                </li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">2. Instal·lar Livewire</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>Instal·la Livewire via Composer:
                    <pre class="bg-gray-100 p-2 rounded mt-2">composer require livewire/livewire</pre>
                </li>
                <li>Publica els fitxers necessaris:
                    <pre class="bg-gray-100 p-2 rounded mt-2">php artisan livewire:publish</pre>
                </li>
                <li>Prova un component Livewire afegint aquest codi a qualsevol vista:
                    <pre class="bg-gray-100 p-2 rounded mt-2">&lt;livewire:counter /&gt;</pre>
                </li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">3. Instal·lar Preline</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>Instal·la Preline amb npm:
                    <pre class="bg-gray-100 p-2 rounded mt-2">npm install preline --save</pre>
                </li>
                <li>Configura <code>tailwind.config.js</code>:
                    <pre class="bg-gray-100 p-2 rounded mt-2">module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('preline/plugin'),
    ],
}</pre>
                </li>
                <li>Compila els actius amb Vite o Mix:
                    <pre class="bg-gray-100 p-2 rounded mt-2">npm run dev</pre>
                </li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">4. Instal·lar Filament</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>Instal·la Filament via Composer:
                    <pre class="bg-gray-100 p-2 rounded mt-2">composer require filament/filament</pre>
                </li>
                <li>Publica els fitxers de configuració i actius:
                    <pre class="bg-gray-100 p-2 rounded mt-2">php artisan filament:install</pre>
                </li>
                <li>Crea un usuari administrador:
                    <pre class="bg-gray-100 p-2 rounded mt-2">php artisan make:filament-user</pre>
                </li>
                <li>Accedeix al panell d'administració a <code>/admin</code>.</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">5. Verificar el projecte</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>Inicia el servidor:
                    <pre class="bg-gray-100 p-2 rounded mt-2">php artisan serve</pre>
                </li>
                <li>Accedeix al navegador i verifica:
                    <ul class="list-disc list-inside ml-6">
                        <li>Laravel funciona correctament.</li>
                        <li>Livewire carrega correctament.</li>
                        <li>Preline aplica els estils.</li>
                        <li>Filament està accessible a <code>/admin</code>.</li>
                    </ul>
                </li>
            </ul>
        </div>
		
		
        <h1 class="text-3xl font-bold mb-6 text-center">Configuració del Servidor Virtual i Laravel</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">1. Crear un servidor virtual amb XAMPP</h2>

            <h3 class="text-xl font-semibold mt-4">1.1 Modificar el fitxer <code>hosts</code></h3>
            <ul class="list-disc list-inside space-y-2">
                <li>Obre el fitxer <code>hosts</code> amb permisos d'administrador:
                    <pre class="bg-gray-100 p-2 rounded mt-2">C:\Windows\System32\drivers\etc\hosts</pre>
                </li>
                <li>Afegeix la línia següent per definir el servidor virtual:
                    <pre class="bg-gray-100 p-2 rounded mt-2">127.0.0.1   laravel.test</pre>
                </li>
            </ul>

            <h3 class="text-xl font-semibold mt-4">1.2 Modificar <code>httpd-vhosts.conf</code></h3>
            <ul class="list-disc list-inside space-y-2">
                <li>Obre el fitxer:
                    <pre class="bg-gray-100 p-2 rounded mt-2">C:\xampp\apache\conf\extra\httpd-vhosts.conf</pre>
                </li>
                <li>Afegeix la configuració del servidor virtual:
                    <pre class="bg-gray-100 p-2 rounded mt-2">&lt;VirtualHost *:80&gt;
    DocumentRoot "C:/xampp/htdocs/laravel-app/public"
    ServerName laravel.test
    &lt;Directory "C:/xampp/htdocs/laravel-app/public"&gt;
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;</pre>
                </li>
            </ul>

            <h3 class="text-xl font-semibold mt-4">1.3 Reiniciar Apache</h3>
            <ul class="list-disc list-inside space-y-2">
                <li>Obre el panell de control de XAMPP.</li>
                <li>Atura i reinicia el servei <strong>Apache</strong>.</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">2. Crear un Layout amb Tailwind i una vista <code>welcome</code></h2>

            <h3 class="text-xl font-semibold mt-4">2.1 Crear el Layout <code>tailwind-app.blade.php</code></h3>
            <p>Crea el fitxer a <code>resources/views/layouts/tailwind-app.blade.php</code>:</p>
           


                        <h3 class="text-xl font-semibold mt-4">2.2 Crear la Vista <code>welcome.blade.php</code></h3>
            <p>Crea el fitxer a <code>resources/views/welcome.blade.php</code>:</p>
            

            

            <h3 class="text-xl font-semibold mt-4">2.3 Configurar la Ruta</h3>
            <p>Modifica el fitxer <code>routes/web.php</code>:</p>
            <pre class="bg-gray-100 p-2 rounded mt-2">use Illuminate\Support\Facades\Route;

Route::get(&#39;/&#39;, function () {
    return view(&#39;welcome&#39;);
});</pre>

            
		
		
		
    </div>

@endsection