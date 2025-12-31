<header class="main-header">
    <div class="container header-flex">
        
        <div class="logo">
            <a href="{{ url('/') }}">MyWebsite</a>
        </div>

        <nav class="main-nav">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/blog') }}">Blog</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>

        <div class="header-cta">
            <a href="{{ url('/contact') }}" class="btn-primary">Get Started</a>
        </div>

    </div>
</header>
