<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>

    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->
     <script src="https://cdn.tailwindcss.com"></script>

<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          brand: {
            red: '#C1121F',      // Primary red
            dark: '#780000',     // Dark red
            light: '#FDF0D5',    // Soft contrast
            gray: '#2B2B2B'
          }
        }
      }
    }
  }
</script>

</head>
<body>

    {{-- Top Header --}}
    @include('partials.top-header')

    {{-- Main Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
