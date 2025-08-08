<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name') }} - @yield('title')</title>		
		<link rel="shortcut icon" type="image/png" href="{{ asset('images/preline.png') }}">
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
		
		<link rel="stylesheet" type="text/css" href=" {{ asset('build/assets/app-B18-jxmX.css') }} " />
		<script type="text/javascript" src=" {{ asset('build/assets/app-CDk75Ly2.js') }} "></script>
		
		 <!-- Fontawesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

		<!-- COPY CSS -->
		<link rel="stylesheet" href="{{ asset('copy/style.css') }}">
		
		<!-- FANCYBOX -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        
		
		<!-- masonry -->
    <style>
        .masonry {
            column-count: 5;
            column-gap: 1rem;
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1rem;
        }

        @media (max-width: 1200px) {
            .masonry {
                column-count: 3;
            }
        }

        @media (max-width: 992px) {
            .masonry {
                column-count: 2;
            }
        }

        @media (max-width: 768px) {
            .masonry {
                column-count: 1;
            }
        }
    </style>
		
		<!-- Styles -->
        @livewireStyles
		
		
    </head>
	
    <body class="font-sans antialiased ">
	
	
	<!-- ========== HEADER ========== -->
<header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-6">
  <nav class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
    <div class="lg:col-span-3 flex items-center">
      <!-- Logo -->
      <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="/" aria-label="Preline">
        <img src="{{ asset('images/preline.png') }}"  align="left" width="50" height="50" />
      </a>
      <!-- End Logo -->

      <div class="ms-1 sm:ms-2">
        <!-- Templates Dropdown -->
        <div class="hs-dropdown  relative  [--auto-close:inside] inline-flex">
          <button id="hs-dropdown-preview-navbar" type="button" class="hs-dropdown-toggle  group relative flex justify-center items-center size-8 text-xs rounded-full text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
          	<span class="">
        	    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 32 32"><path fill="#a35be6" d="M27.4 5.5h-9.2l-2.1 4.2H4.3v16.8h25.2v-21Zm0 18.7H6.6V11.8h20.8Zm0-14.5h-8.2l1-2.1h7.1v2.1Z"/><path fill="#a45ae7" d="M25.7 13.7H.5l3.8 12.8h25.2z"/><path fill="#639" d="M12.475 12.475H28.05a2.967 2.967 0 0 1 2.967 2.966v12.61a2.967 2.967 0 0 1-2.967 2.966H15.441a2.967 2.967 0 0 1-2.966-2.967Z"/><path fill="#fff" d="M17.166 27.624v-3.115c0-1.243.797-1.91 2.002-1.91c1.187-.019 1.929.76 1.892 2.076h-1.372c.037-.5-.186-.871-.557-.852c-.463 0-.593.315-.593.908v2.707c0 .575.185.853.593.872c.427 0 .594-.427.557-.909h1.372c.074 1.354-.78 2.151-1.984 2.133c-1.169 0-1.91-.65-1.91-1.91m4.394-.223h1.28c.018.594.204.964.612.964s.556-.24.556-.797c0-.463-.204-.723-.705-.964l-.482-.223c-.853-.408-1.205-.908-1.205-1.91c0-1.112.705-1.89 1.854-1.89s1.762.796 1.78 2.094h-1.242c0-.537-.111-.908-.52-.908c-.37 0-.556.185-.556.649c0 .463.167.649.612.834l.445.204c.946.445 1.354 1.02 1.354 2.096c0 1.279-.723 1.984-1.91 1.984s-1.854-.816-1.873-2.133m4.19 0h1.299c0 .594.204.964.593.964c.39 0 .557-.24.557-.797c0-.463-.186-.723-.705-.964l-.482-.223c-.853-.408-1.187-.908-1.187-1.91c0-1.112.686-1.89 1.854-1.89s1.743.796 1.78 2.094h-1.242c-.018-.537-.13-.908-.538-.908c-.37 0-.537.185-.537.649c0 .463.148.649.593.834l.464.204c.927.445 1.335 1.02 1.335 2.096c0 1.279-.724 1.984-1.91 1.984c-1.187 0-1.855-.816-1.873-2.133z"/></svg>

            <span class="absolute -top-0.5 -end-0.5">
              <span class="relative flex">
                <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 dark:bg-red-600 opacity-75"></span>
                <span class="relative inline-flex size-2 bg-red-500 rounded-full"></span>
                <span class="sr-only">Notification</span>
              </span>
            </span>
          </button>

          <!-- Dropdown -->
          <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-full md:w-[450px] transition-[opacity,margin] duration opacity-0 hidden z-30 overflow-hidden border border-gray-200 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:bg-neutral-800 dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-preview-navbar">
          	<!-- Tab -->
          	<div class="p-3 pb-0 flex flex-wrap justify-between items-center gap-3 border-b border-gray-200 dark:border-neutral-700">
            	<!-- Nav Tab -->
            	<nav class="flex  gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            	  <button type="button" class="hs-tab-active:after:bg-gray-800 hs-tab-active:text-gray-800 px-2 py-1.5 mb-2 relative inline-flex justify-center items-center gap-x-2 text-nowrap  hover:bg-gray-100 text-gray-500 hover:text-gray-800 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 after:absolute after:-bottom-2 after:inset-x-2 after:z-10 after:h-0.5 after:pointer-events-none dark:hs-tab-active:text-neutral-200 dark:hs-tab-active:after:bg-neutral-400 dark:text-neutral-500 dark:hover:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " id="hs-pmn-item-pro" aria-selected="false" data-hs-tab="#hs-pmn-pro" aria-controls="hs-pmn-pro" role="tab" >
            	    tailwind
            	  </button>
				  <button type="button" class="hs-tab-active:after:bg-gray-800 hs-tab-active:text-gray-800 px-2 py-1.5 mb-2 relative inline-flex justify-center items-center gap-x-2 text-nowrap  hover:bg-gray-100 text-gray-500 hover:text-gray-800 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 after:absolute after:-bottom-2 after:inset-x-2 after:z-10 after:h-0.5 after:pointer-events-none dark:hs-tab-active:text-neutral-200 dark:hs-tab-active:after:bg-neutral-400 dark:text-neutral-500 dark:hover:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " id="hs-pmn-item-bootstrap" aria-selected="false" data-hs-tab="#hs-pmn-bootstrap" aria-controls="hs-pmn-bootstrap" role="tab" >
            	    bootstrap
            	  </button>
            	  <button type="button" class="hs-tab-active:after:bg-gray-800 hs-tab-active:text-gray-800 px-2 py-1.5 mb-2 relative inline-flex justify-center items-center gap-x-2 text-nowrap  hover:bg-gray-100 text-gray-500 hover:text-gray-800 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 after:absolute after:-bottom-2 after:inset-x-2 after:z-10 after:h-0.5 after:pointer-events-none dark:hs-tab-active:text-neutral-200 dark:hs-tab-active:after:bg-neutral-400 dark:text-neutral-500 dark:hover:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 active " id="hs-pmn-item-free" aria-selected="true" data-hs-tab="#hs-pmn-free" aria-controls="hs-pmn-free" role="tab" >
            	    UIKIT3
            	  </button>
            	</nav>
            	<!-- End Nav Tab -->
            </div>
            <!-- End Tab -->

            <!-- Tab Content pro TAILWIND-->
            <div id="hs-pmn-pro" class="hidden" role="tabpanel" aria-labelledby="hs-pmn-item-pro">
        	    <!-- Header -->
        	  	<div class="p-3 flex flex-wrap justify-between items-center gap-3">
        	    	<span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Pàgines Tailwind</span>

        	      <div class="ms-auto">
        	      	<a class="group py-2 px-2.5 rounded-md flex items-center gap-x-1 text-[13px] bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-900 dark:bg-white dark:hover:bg-neutral-200 dark:focus:bg-neutral-200 dark:text-neutral-800" href="https://preline.co/examples.html"target="_blank">
        						Purchase
        						<svg class="hidden md:inline-block shrink-0 size-3.5 group-hover:translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-focus:opacity-100 lg:group-focus:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:group-focus:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	    </div>
        	    <!-- End Header -->

        	    <!-- Body TAIWIND-->				
				<?php
$host = '127.0.0.1';
$db   = 'laravel12';
$user = 'joan';
$pass = 'queMm88/g62123';

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Agafem els posts de categoria 23 i etiquetes 135 I 62
$sql = "
    SELECT p.*
    FROM posts p
    JOIN post_etiquetas pe1 ON p.id = pe1.post_id AND pe1.etiqueta_id = 135
    JOIN post_etiquetas pe2 ON p.id = pe2.post_id AND pe2.etiqueta_id = 62
    WHERE p.category_id = 23
";

$result = $conn->query($sql);
?>			
        	    <div class="p-3 max-h-[25rem] overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        	    	<!-- Grid -->
        	      <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
        	        <!-- Link -->
        	        <?php while($row = $result->fetch_assoc()): ?>
  <a class="p-3 relative flex flex-col justify-center items-center gap-y-3 rounded-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 transition" href="<?= $row['url'] ?: '#' ?>">
    <img class="dark:hidden w-28 rounded-lg shadow" src="/storage/<?= $row['img'] ?>" alt="<?= $row['title'] ?>">
    <img class="hidden dark:block w-28 rounded-lg shadow" src="/storage/<?= $row['img'] ?>" alt="<?= $row['title'] ?>">
    <p class="text-sm text-gray-800 dark:text-neutral-400">
      <?= $row['title'] ?>
    </p>
  </a>
<?php endwhile; ?>
        	        <!-- End Link -->
<?php $conn->close(); ?>        	        
        	    	</div>
        	    	<!-- End Grid -->
        	  	</div>
        	  	<!-- Body -->

        	  	<!-- Footer -->
        	    <div class="p-3 flex flex-wrap justify-center items-center gap-0.5">
        	    	<div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../pro/index.html">
        	          Main page
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../pro/examples.html">
        	          Examples (600+<!-- (601) -->)
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../pro/templates.html">
        	          Templates (12)
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	    </div>
        	    <!-- End Footer -->
        	  </div>
        	  <!-- End Tab Content -->
			  
			  <!-- Tab Content BOOTSTRAP-->
            <div id="hs-pmn-bootstrap" class="hidden" role="tabpanel" aria-labelledby="hs-pmn-item-bootstrap">
        	    <!-- Header -->
        	  	<div class="p-3 flex flex-wrap justify-between items-center gap-3">
        	    	<span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Pagines Bootstrap</span>

        	      <div class="ms-auto">
        	      	<a class="group py-2 px-2.5 rounded-md flex items-center gap-x-1 text-[13px] bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-900 dark:bg-white dark:hover:bg-neutral-200 dark:focus:bg-neutral-200 dark:text-neutral-800" href="https://bootstrapmade.com/demo/iLanding/"target="_blank">
        						Purchase
        						<svg class="hidden md:inline-block shrink-0 size-3.5 group-hover:translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-focus:opacity-100 lg:group-focus:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:group-focus:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	    </div>
        	    <!-- End Header -->

        	    <!-- Body BOOTSTRAP-->				
				<?php
$host = '127.0.0.1';
$db   = 'laravel12';
$user = 'joan';
$pass = 'queMm88/g62123';

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Agafem els posts de categoria 23 i etiquetes 135 I 106
$sql = "
    SELECT p.*
    FROM posts p
    JOIN post_etiquetas pe1 ON p.id = pe1.post_id AND pe1.etiqueta_id = 135
    JOIN post_etiquetas pe2 ON p.id = pe2.post_id AND pe2.etiqueta_id = 106
    WHERE p.category_id = 23
";

$result = $conn->query($sql);
?>			
        	    <div class="p-3 max-h-[25rem] overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        	    	<!-- Grid -->
        	      <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
        	        <!-- Link -->
        	        <?php while($row = $result->fetch_assoc()): ?>
  <a class="p-3 relative flex flex-col justify-center items-center gap-y-3 rounded-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 transition" href="<?= $row['url'] ?: '#' ?>">
    <img class="dark:hidden w-28 rounded-lg shadow" src="/storage/<?= $row['img'] ?>" alt="<?= $row['title'] ?>">
    <img class="hidden dark:block w-28 rounded-lg shadow" src="/storage/<?= $row['img'] ?>" alt="<?= $row['title'] ?>">
    <p class="text-sm text-gray-800 dark:text-neutral-400">
      <?= $row['title'] ?>
    </p>
  </a>
<?php endwhile; ?>
        	        <!-- End Link -->
<?php $conn->close(); ?>        	        
        	    	</div>
        	    	<!-- End Grid -->
        	  	</div>
        	  	<!-- Body -->

        	  	<!-- Footer -->
        	    <div class="p-3 flex flex-wrap justify-center items-center gap-0.5">
        	    	<div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../pro/index.html">
        	          Main page
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../pro/examples.html">
        	          Examples (600+<!-- (601) -->)
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../pro/templates.html">
        	          Templates (12)
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	    </div>
        	    <!-- End Footer -->
        	  </div>
        	  <!-- End Tab Content -->
			  

        	  <!-- Tab Content UIKIT3-->
            <div id="hs-pmn-free" class="" role="tabpanel" aria-labelledby="hs-pmn-item-free">
            	<!-- Header -->
        	  	<div class="p-3 flex flex-wrap justify-between items-center gap-3">
        	    	<span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Pagines UIKIT3</span>

        	      <div class="ms-auto">
        	      	<a class="group py-2 px-2.5 rounded-md flex items-center gap-x-1 text-[13px] bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-900 dark:bg-white dark:hover:bg-neutral-200 dark:focus:bg-neutral-200 dark:text-neutral-800" href="https://getuikit.com/docs/installation"target="_blank">
        						Free download
        						<svg class="hidden md:inline-block shrink-0 size-3.5 group-hover:translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-focus:opacity-100 lg:group-focus:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:group-focus:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	    </div>
        	    <!-- End Header -->

        	    <!-- Body uikit-->				
				<?php
$host = '127.0.0.1';
$db   = 'laravel12';
$user = 'joan';
$pass = 'queMm88/g62123';

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Agafem els posts de categoria 23 i etiquetes 135 I 63
$sql = "
    SELECT p.*
    FROM posts p
    JOIN post_etiquetas pe1 ON p.id = pe1.post_id AND pe1.etiqueta_id = 135
    JOIN post_etiquetas pe2 ON p.id = pe2.post_id AND pe2.etiqueta_id = 63
    WHERE p.category_id = 23
";

$result = $conn->query($sql);
?>			
        	    <div class="p-3 max-h-[25rem] overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        	    	<!-- Grid -->
        	      <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
        	        <!-- Link -->
        	        <?php while($row = $result->fetch_assoc()): ?>
  <a class="p-3 relative flex flex-col justify-center items-center gap-y-3 rounded-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 transition" href="<?= $row['url'] ?: '#' ?>">
    <img class="dark:hidden w-28 rounded-lg shadow" src="/storage/<?= $row['img'] ?>" alt="<?= $row['title'] ?>">
    <img class="hidden dark:block w-28 rounded-lg shadow" src="/storage/<?= $row['img'] ?>" alt="<?= $row['title'] ?>">
    <p class="text-sm text-gray-800 dark:text-neutral-400">
      <?= $row['title'] ?>
    </p>
  </a>
<?php endwhile; ?>
        	        <!-- End Link -->
<?php $conn->close(); ?>        	        
        	    	</div>
        	    	<!-- End Grid -->
        	  	</div>
        	  	<!-- Body -->

        	  	<!-- Footer -->
        	    <div class="p-3 flex flex-wrap justify-center items-center gap-0.5">
        	    	<div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="/">
        	          inici
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="/categories/7">
        	          people
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="/?etiqueta_id=22">
        	          models_people
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	    </div>
        	    <!-- End Footer -->
            </div>
        	  <!-- End Tab Content -->
          </div>
          <!-- End Dropdown -->
        </div>
        <!-- End Templates Dropdown -->
		
		
		<!-- hosts bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb-->
        <div class="hs-dropdown  relative  [--auto-close:inside] inline-flex">
          <button id="hs-dropdown-preview-navbar" type="button" class="hs-dropdown-toggle  group relative flex justify-center items-center size-8 text-xs rounded-full text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
          	<span class="">
        	  <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 32 32"><defs><linearGradient id="vscodeIconsFolderTypeServerOpened0" x1="127.346" x2="125.823" y1="-116.408" y2="-119.26" gradientTransform="matrix(.864 0 0 -.864 -81.843 -76.99)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#fff"/></linearGradient><linearGradient id="vscodeIconsFolderTypeServerOpened1" x1="127.349" x2="125.824" y1="-116.274" y2="-119.127" gradientTransform="matrix(.864 0 0 -.864 -81.843 -76.99)" gradientUnits="userSpaceOnUse"><stop offset="0"/><stop offset="1" stop-color="#6a6a6a"/></linearGradient><linearGradient id="vscodeIconsFolderTypeServerOpened2" x1="126.507" x2="128.647" y1="-131.222" y2="-131.222" gradientTransform="matrix(.864 0 0 -.864 -90.788 -94.496)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e7ebef"/><stop offset="1" stop-color="#c4ce00"/></linearGradient><linearGradient id="vscodeIconsFolderTypeServerOpened3" x1="127.346" x2="125.823" y1="-117.409" y2="-120.262" gradientTransform="matrix(.864 0 0 -.864 -81.843 -78.528)" href="#vscodeIconsFolderTypeServerOpened0"/><linearGradient id="vscodeIconsFolderTypeServerOpened4" x1="127.349" x2="125.824" y1="-117.276" y2="-120.128" gradientTransform="matrix(.864 0 0 -.864 -81.843 -78.528)" href="#vscodeIconsFolderTypeServerOpened1"/><linearGradient id="vscodeIconsFolderTypeServerOpened5" x1="127.346" x2="125.823" y1="-118.411" y2="-121.263" gradientTransform="matrix(.864 0 0 -.864 -81.843 -80.066)" href="#vscodeIconsFolderTypeServerOpened0"/><linearGradient id="vscodeIconsFolderTypeServerOpened6" x1="127.349" x2="125.824" y1="-118.277" y2="-121.13" gradientTransform="matrix(.864 0 0 -.864 -81.843 -80.066)" href="#vscodeIconsFolderTypeServerOpened1"/><linearGradient id="vscodeIconsFolderTypeServerOpened7" x1="127.346" x2="125.823" y1="-119.413" y2="-122.265" gradientTransform="matrix(.864 0 0 -.864 -81.843 -81.604)" href="#vscodeIconsFolderTypeServerOpened0"/><linearGradient id="vscodeIconsFolderTypeServerOpened8" x1="127.349" x2="125.824" y1="-119.279" y2="-122.131" gradientTransform="matrix(.864 0 0 -.864 -81.843 -81.604)" href="#vscodeIconsFolderTypeServerOpened1"/><linearGradient id="vscodeIconsFolderTypeServerOpened9" x1="127.346" x2="125.823" y1="-115.406" y2="-118.258" gradientTransform="matrix(.864 0 0 -.864 -81.843 -75.452)" href="#vscodeIconsFolderTypeServerOpened0"/><linearGradient id="vscodeIconsFolderTypeServerOpeneda" x1="127.349" x2="125.824" y1="-115.272" y2="-118.125" gradientTransform="matrix(.864 0 0 -.864 -81.843 -75.452)" href="#vscodeIconsFolderTypeServerOpened1"/></defs><path fill="#7addd3" d="M27.4 5.5h-9.2l-2.1 4.2H4.3v16.8h25.2v-21Zm0 18.7H6.6V11.8h20.8Zm0-14.5h-8.2l1-2.1h7.1v2.1Z"/><path fill="#7addd3" d="M25.7 13.7H.5l3.8 12.8h25.2z"/><path fill="#00608b" stroke="#64a4e8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.28" d="M29.374 12.871a324 324 0 0 1-4.66-1.331a1.3 1.3 0 0 0-.642-.038c-.113.038-6.883 4.008-7.11 4.121c-.038 0-.038.038-.076.076a.8.8 0 0 0-.264.567v0l.078 11.743c0 .189.038.264.189.34c0 0 4.912 1.965 5.479 2.116h.076c.264.038.34.038.453-.076l.038-.038c.113-.076 6.416-4.869 6.529-4.982a.57.57 0 0 0 .151-.3c0-.113.177-11.554.177-11.7v-.038a.51.51 0 0 0-.416-.453Zm-.118.567a2 2 0 0 0 .227-.189s-.113.076-.264.189c-.264.189-.6.416-.982.718c.642-.453 1.209-.831 1.36-.945a2.4 2.4 0 0 1-.336.227Z"/><path fill="#00608b" d="M24.7 11.5a1.3 1.3 0 0 0-.642-.038c-.113.038-6.867 4.051-7.094 4.2c-.189.113-.264.34 0 .453c.264.076 5.214 1.7 5.4 1.738a.82.82 0 0 0 .68-.038c.113-.076 6.516-4.453 6.63-4.566s-.111-.314-.27-.367c-.181-.06-4.518-1.346-4.744-1.422l.038.038Z"/><path fill="#00608b" d="M16.66 16.3c0-.189.113-.3.264-.264c.113.038 5.441 1.776 5.63 1.927c.189.113.3.189.3.34l-.076 11.932a.235.235 0 0 1-.34.227c-.567-.151-5.479-2.116-5.479-2.116c-.151-.076-.189-.151-.189-.34Z"/><path fill="#00608b" d="M22.969 30.389c-.113.076-.235-.013-.235-.226l.046-11.895a.47.47 0 0 1 .189-.378c.113-.076 6.53-4.528 6.681-4.642s.227.113.189.227c0 .113-.214 11.5-.214 11.616a.28.28 0 0 1-.151.264c-.113.113-6.467 4.958-6.543 5.071z"/><path fill="#00608b" d="M16.886 15.963c-.038 0 0-.189.113-.3a.83.83 0 0 0-.34.642a.236.236 0 0 1 .227-.189c.68.227 5.365 1.851 5.554 1.927s.3.144.3.333l.037.451l.068-.459c0-.189.126-.324.352-.475c.113-.076 2.969-2.095 3.775-2.815c-.766.408-3.8 2.777-4.216 2.777c-.321 0-5.831-1.889-5.869-1.889Z"/><path fill="#00608b" d="M26.521 15.4a2 2 0 0 1 .34-.227ZM23 30.365a.46.46 0 0 1-.533.109a.28.28 0 0 0 .281-.226s.029.205.252.118Zm6.58-17.056c.189-.091.269.007.275.169c.027-.167.021-.466-.451-.6c0 0 .379.188.176.428Z"/><path fill="url(#vscodeIconsFolderTypeServerOpened0)" d="m29.278 23.842l-4.1 2.976v.151l4.091-3.027l.007-.1Z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened1)" d="M29.3 23.719L25.18 26.7v.151l4.1-3.042l.019-.094Z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened2)" d="M18.51 18.444v.227l1.852.642v-.189z"/><path d="m18.51 18.671l-.113.075v-.453l2.04.718l-.075.113l-1.852-.68z" opacity="0.22"/><path fill="#fff" d="M20.437 19.464v-.453l-.075.113v.189l-1.852-.642l-.113.075z" opacity="0.72"/><path fill="url(#vscodeIconsFolderTypeServerOpened3)" d="m29.278 23.169l-4.1 2.976v.155l4.091-3.027l.007-.1Z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened4)" d="m29.3 23.047l-4.12 2.985v.151l4.1-3.042l.019-.094Z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened5)" d="m29.278 22.5l-4.1 2.976v.151l4.093-3.027z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened6)" d="m29.3 22.374l-4.12 2.985v.151l4.1-3.042l.019-.094Z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened7)" d="M29.278 21.824L25.18 24.8v.151l4.091-3.027z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened8)" d="m29.3 21.7l-4.12 2.987v.151l4.1-3.042z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpened9)" d="m29.278 24.514l-4.1 2.976v.151l4.091-3.027l.007-.1Z" opacity="0.13"/><path fill="url(#vscodeIconsFolderTypeServerOpeneda)" d="m29.3 24.392l-4.12 2.985v.151l4.1-3.042l.019-.094Z" opacity="0.13"/></svg>

            <span class="absolute -top-0.5 -end-0.5">
              <span class="relative flex">
                <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 dark:bg-red-600 opacity-75"></span>
                <span class="relative inline-flex size-2 bg-red-500 rounded-full"></span>
                <span class="sr-only">Notification</span>
              </span>
            </span>
          </button>

          <!-- Dropdown -->
          <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-full md:w-[450px] transition-[opacity,margin] duration opacity-0 hidden z-30 overflow-hidden border border-gray-200 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:bg-neutral-800 dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-preview-navbar"> 

        	  <!-- Tab Content UIKIT3-->
            <div id="hs-pmn-free" class="" role="tabpanel" aria-labelledby="hs-pmn-item-free">
            	<!-- Header -->
        	  	<div class="p-3 flex flex-wrap justify-between items-center gap-3">
        	    	<span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">HOSTS</span>

        	      <div class="ms-auto">
        	      	<a class="group py-2 px-2.5 rounded-md flex items-center gap-x-1 text-[13px] bg-lime-400 text-black hover:hover:bg-lime-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-orange-700 dark:bg-white dark:hover:bg-neutral-200 dark:focus:bg-neutral-200 dark:text-neutral-800" href="http://larpreline.test/post/465"target="_blank">
        						C:\Windows\System32\drivers\etc\hosts
        						<svg class="hidden md:inline-block shrink-0 size-3.5 group-hover:translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-focus:opacity-100 lg:group-focus:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:group-focus:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	    </div>
        	    <!-- End Header -->

        	   <!-- Body -->
<div class="p-3 max-h-[25rem] overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
    <!-- Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
        <?php
        $hostsFile = 'C:\Windows\System32\drivers\etc\hosts';
        if (file_exists($hostsFile)) {
            $lines = file($hostsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $validHosts = [];

            foreach ($lines as $line) {
                $line = trim($line);

                // Procesar líneas válidas de hosts
                if (!empty($line) && strpos($line, '#') !== 0) {
                    $parts = preg_split('/\s+/', $line);
                    if (isset($parts[1])) {
                        $validHosts[] = $parts[1]; // Agregar solo el dominio
                    }
                }
            }

            foreach ($validHosts as $host) {
                echo '<a class="flex flex-col items-center text-center mx-2 transition duration-150 ease-in-out rounded-lg group" href="http://' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '" class="active">';
                
                // SVG - Afegir mida consistent per tots
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" class="w-16 h-16" viewBox="0 0 32 32">
                        <path fill="#1e88e5" d="M28.967 12H9.442a2 2 0 0 0-1.898 1.368L4 24V10h24a2 2 0 0 0-2-2H15.124a2 2 0 0 1-1.28-.464l-1.288-1.072A2 2 0 0 0 11.276 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h22l4.805-11.212A2 2 0 0 0 28.967 12"/>
                        <path fill="#bbdefb" d="M27.354 20.871L32 25.343l-2.74 2.624l-4.613-4.471v-.737l1.947-1.888zm.751-2.023l-.8-.768l-3.953 3.839v1.577L18.706 28L16 25.343l4.612-4.472h1.626l.644-.624l-3.17-3.08h-1.071l-2.32-2.271l2.162-2.096l2.311 2.24v1.048l3.21 3.072l2.194-2.128l-.791-.808l1.072-1.049h-2.196l-.536-.52L26.48 12l.545.527v2.129l1.081-1.057l2.707 2.625a2.22 2.22 0 0 1 0 3.184l-1.627-1.609Z"/>
                    </svg>';
                
                // Afegir el títol de l'host sota l'imatge
                echo '<p class="text-sm text-gray-800 dark:text-neutral-400">' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '</p>';
                
                echo '</a>';
            }
        } else {
            echo '<li><span class="text-gray-500">Archivo hosts no encontrado.</span></li>';
        }
        ?>
    </div>
    <!-- End Grid -->
</div>
<!-- Body -->

        	  	<!-- Footer -->
        	    <div class="p-3 flex flex-wrap justify-center items-center gap-0.5">
        	    	<div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://www.apachelounge.com/download/"target="_blank">
        	        Apache
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://windows.php.net/download"target="_blank">
        	         Php
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
        	      <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://dev.mysql.com/downloads/mysql/"target="_blank">
        	          Mysql
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
				  <div class="relative ps-2 ms-1 first:ps-0 first:ms-0 first:before:hidden before:hidden md:before:block before:absolute before:top-1/2 before:start-0 before:w-px before:h-4 before:bg-gray-200 before:-translate-y-1/2 dark:before:bg-neutral-700">
        	        <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://www.phpmyadmin.net/"target="_blank">
        	          PhpMyadmin
        	          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"/><path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"/></svg>
        	        </a>
        	      </div>
				  
        	    </div>
        	    <!-- End Footer -->
            </div>
        	  <!-- End Tab Content -->
          </div>
          <!-- End Dropdown -->
        </div>
        <!-- End Templates Dropdown -->
		
		
      </div>
    </div>

    <!-- Button Group -->
    <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
      
      <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-lime-400 text-black hover:bg-lime-500 focus:outline-none focus:bg-lime-500 transition disabled:opacity-50 disabled:pointer-events-none">
        <a href="admin">Admin Filament </a>
      </button>

      <div class="lg:hidden">
        <button type="button" class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
          <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>
    <!-- End Button Group -->

    <!-- Collapse -->
    <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
      <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
        <div>
          <a class="relative inline-block text-black focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 dark:text-white" href="/" aria-current="page">/welcome</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="/home">Pagines</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="/post/317">sobre mi</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="/questions">questions</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="/blog">Laravel Blog</a>
        </div>
      </div>
    </div>
    <!-- End Collapse -->
  </nav>
</header>
<!-- ========== END HEADER ========== -->
	
	
	<!-- Content -->
        @yield('content')

       
		
	<footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <!-- Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-5">
    <div>
      <a class="flex-none text-xl font-semibold text-black focus:outline-none dark:text-white" href="#" aria-label="Brand">{{ config('app.name') }}</a>
    </div>
    <!-- End Col -->

    <ul class="text-center">
    <footer>
    <p>
        Controlador: {{ class_basename(Route::current()->getController()) }} |
        Función: {{ Route::current()->getActionMethod() }} |
        Vista: {{ $viewName }}
    </p>
</footer>
    </ul>
    <!-- End Col -->

    <!-- Social Brands -->
    <div class="md:text-end space-x-2">
      <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://www.instagram.com/estudijoanpuig/">
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
      </a>
      <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://x.com/estudijoanpuig">
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="#042cea"><path d="M1 2h2.5L3.5 2h-2.5zM5.5 2h2.5L7.2 2h-2.5z"><animate fill="freeze" attributeName="d" dur="0.4s" values="M1 2h2.5L3.5 2h-2.5zM5.5 2h2.5L7.2 2h-2.5z;M1 2h2.5L18.5 22h-2.5zM5.5 2h2.5L23 22h-2.5z"/></path><path d="M3 2h5v0h-5zM16 22h5v0h-5z"><animate fill="freeze" attributeName="d" begin="0.4s" dur="0.4s" values="M3 2h5v0h-5zM16 22h5v0h-5z;M3 2h5v2h-5zM16 22h5v-2h-5z"/></path><path d="M18.5 2h3.5L22 2h-3.5z"><animate fill="freeze" attributeName="d" begin="0.5s" dur="0.4s" values="M18.5 2h3.5L22 2h-3.5z;M18.5 2h3.5L5 22h-3.5z"/></path></g></svg>
      </a>
      <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://www.facebook.com/joanpuigbertran">
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 48 48"><path fill="#2f88ff" stroke="#000" stroke-linejoin="round" stroke-width="3.8" d="M36 12.5997H31.2489H29.9871C28.9009 12.5997 28.0203 13.4803 28.0203 14.5666V21.4674H36L34.8313 29.0643H28.0203V43H19.2451V29.0643H12V21.4674H19.1515L19.2451 14.2563L19.2318 12.9471C19.1879 8.60218 22.6745 5.04434 27.0194 5.0004C27.0459 5.00013 27.0724 5 27.0989 5H36V12.5997Z"/></svg>
      </a>
      <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="https://github.com/estudijoanpuig">
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#070e2f" d="M12 .297c-6.63 0-12 5.373-12 12c0 5.303 3.438 9.8 8.205 11.385c.6.113.82-.258.82-.577c0-.285-.01-1.04-.015-2.04c-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729c1.205.084 1.838 1.236 1.838 1.236c1.07 1.835 2.809 1.305 3.495.998c.108-.776.417-1.305.76-1.605c-2.665-.3-5.466-1.332-5.466-5.93c0-1.31.465-2.38 1.235-3.22c-.135-.303-.54-1.523.105-3.176c0 0 1.005-.322 3.3 1.23c.96-.267 1.98-.399 3-.405c1.02.006 2.04.138 3 .405c2.28-1.552 3.285-1.23 3.285-1.23c.645 1.653.24 2.873.12 3.176c.765.84 1.23 1.91 1.23 3.22c0 4.61-2.805 5.625-5.475 5.92c.42.36.81 1.096.81 2.22c0 1.606-.015 2.896-.015 3.286c0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
      </a>
    </div>
    <!-- End Social Brands -->
  </div>
  <!-- End Grid -->
</footer>

<div id="back-to-top" class="fixed bottom-32 right-4 hidden">
    <button
        onclick="scrollToTop()"
        class="bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
    >
        ⬆
    </button>
</div>

 <!-- Modals -->
        @stack('modals')

        @livewireScripts


<script>
    // Mostra o amaga el botó "Back to Top"
    window.addEventListener("scroll", function () {
        const backToTopButton = document.getElementById("back-to-top");
        if (window.scrollY >150) {
            backToTopButton.classList.remove("hidden");
            backToTopButton.classList.add("block");
        } else {
            backToTopButton.classList.remove("block");
            backToTopButton.classList.add("hidden");
        }
    });

    // Funció per tornar a dalt
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
</script>


<!-- COPY js -->
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
	<script src='https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?skin=sunburst'></script>
    <script src="{{ asset('copy/script.js') }}"></script>
		

    </body>
</html>