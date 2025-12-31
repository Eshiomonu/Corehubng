<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Your Company Name | IT Solutions, Web Development & More')</title>
<meta name="description" content="@yield('description', 'We provide IT consultation, web & software development, graphics design, electronics sales, logistics, and education services.')">
<meta name="keywords" content="IT consultation, web development, software development, graphic design, electronics, logistics, education services">
<meta name="author" content="Your Company Name">
<meta name="robots" content="index, follow">

<!-- Open Graph for social sharing -->
<meta property="og:title" content="@yield('title', 'Your Company Name')" />
<meta property="og:description" content="@yield('description', 'IT solutions and services for your business.')" />
<meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="@yield('title', 'Your Company Name')" />
<meta name="twitter:description" content="@yield('description', 'IT solutions and services for your business.')" />
<meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}" />


    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">

     <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!-- Tailwind CSS CDN -->
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
<button id="scrollTopBtn"
    class="fixed bottom-6 right-6 hidden bg-brand-red hover:bg-brand-dark
           text-white p-3 rounded-full shadow-lg transition">
    ↑
</button>


    <script>
    const header = document.getElementById('mainHeader');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.classList.add('shadow-md');
        } else {
            header.classList.remove('shadow-md');
        }
    });
</script>
<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<script>
    const scrollBtn = document.getElementById('scrollTopBtn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollBtn.classList.remove('hidden');
        } else {
            scrollBtn.classList.add('hidden');
        }
    });

    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".testimonial-swiper", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
    autoplay: { delay: 5000 },
    pagination: { el: ".swiper-pagination", clickable: true },
  });
</script>

</body>
</html>
