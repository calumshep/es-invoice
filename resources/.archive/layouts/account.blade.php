<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>

<body>
    <div id="app">
        <header>
            @include('includes.nav')
        </header>

        <div class="container">
            @auth
                <div class="row" style="margin-top: 60px; padding-top: 30px;">
                    <div class="col-lg-3 col-md-4 mb-3">
                        @include('includes.sidebar')
                    </div>

                    <main class="col-lg-9 col-md-8 mb-3">
                        @yield('content')
                    </main>
                </div>
            @endauth

            @guest
                @yield('content')
            @endguest
        </div>
    </div>

    @stack('scripts')
</body>
</html>
