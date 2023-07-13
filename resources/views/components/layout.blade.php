<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- /////////////////////////////////////////////////////////// --}}
  <title>Zavrsni v3 - Hrvoje Krhač</title>
  {{-- /////////////////////////////////////////////////////////// --}}
  <link rel="stylesheet" href="pico.css">
  <link rel="stylesheet" href="app.css">
</head>
<body>
	<x-nav>

	</x-nav>
  <main>
    <section class="container">
      {{$slot}}
    </section>
  </main>
  <x-footer>
    <i>Lorem ipsum dolor sit..</i>
  </x-footer>
</body>
</html>
