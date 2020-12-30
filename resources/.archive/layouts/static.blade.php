<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div class="cookie-notice">
        @include('cookieConsent::index')
    </div>
    <div id="app">
        <header>
            @include('includes.nav')
            <div class="top-img" style="background-image: url(@yield('top-image'));">
                <div class="container text-center pt-5">
                    <img src="/img/logo.jpg" height="150" class="mt-5 mx-auto">
                </div>
            </div>
        </header>

        <main class="container-fluid" style="margin-top: 55px; margin-bottom: 55px;">
            @yield('content')
        </main>
    </div>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="text-white float-right mb-0"><a href="#">Back to top</a></p>
            <p class="text-white mb-0">
                &copy; {{ @date('Y') }} Edge Snowsport &middot;
                <a href="{{ url('/privacy') }}">Privacy</a>
            </p>
        </div>
    </footer>
</body>
</html>
