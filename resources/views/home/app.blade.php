<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolahku - @yield('title')</title>

  @include('home.partials.link')
</head>

<body>
  <!-- Navbar -->
  @include('home.partials.navbar')
  <!-- /Navbar -->

  <!-- Content Section Start -->
  @yield('content')
  <!-- /Content -->
  @include('home.partials.script')
</body>

</html>