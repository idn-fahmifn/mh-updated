<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Menara Hijau Booking App Manager</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon.png') }}">

  <!-- Tambahkan di <head> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/preline@2.0.0/dist/preline.css">
  <script src="https://cdn.jsdelivr.net/npm/preline@2.0.0/dist/preline.js"></script>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])


  <style>
    /* Atur ukuran SVG agar responsif */
    svg {
      width: 100%;
      border: 1px solid #ccc;
    }

    /* Contoh style untuk bagian denah (misal path atau rect) */
    .available {
      transition: fill 0.3s ease;
      cursor: pointer;
      fill: #78fa61
    }

    /* Warna saat hover */
    .available:hover {
      fill: #179b00;
    }

    .blue {
      transition: fill 0.3s ease;
      cursor: pointer;
    }

    .unvailable {
      ransition: fill 0.3s ease;
      cursor: pointer;
      fill: #f83030
    }

    /* Warna saat hover */
    .blue:hover {
      fill: #2399fa;
    }

    .text-ruangan {
      font-size: 2rem;
      font-weight: 700;
    }

    .text-ukuran {
      font-size: 1.2rem;
      font-weight: 400;
    }
    .text-kecil-bold {
      font-size: 0.7rem;
      font-weight: 900;
    }
    .text-kecil {
      font-size: 0.7rem;
      font-weight: 400;
    }

    .vertical{
      writing-mode:vertical-rl;
    }


  </style>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen flex flex-col bg-gray-white">

    @include('layouts.navigation')

    <main class="flex-1">
      @isset($header)
      <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
      </header>
    @endisset

      {{ $slot }}
    </main>

    @include('layouts.footer')

  </div>
</body>

</html>