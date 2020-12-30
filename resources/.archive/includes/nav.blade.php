<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
    <div class="container-fluid">
        <!-- navbar branding -->
        <a class="navbar-brand" href="{{ route('static.home') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- main nav links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('static.home')) active @endif" href="{{ route('static.home') }}">
                        <i class="fas fa-fw fa-home mr-2"></i>Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Route::is('static.about')) active @endif" href="{{ route('static.about') }}">
                        <i class="fas fa-fw fa-info-circle mr-2"></i>About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Route::is('static.services')) active @endif" href="{{ route('static.services') }}">
                        <i class="fas fa-fw fa-tools mr-2"></i>Services
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if(Route::is('static.equipment') || Route::is('static.gates')) active @endif" href="#" data-toggle="dropdown">
                        <i class="fas fa-fw fa-skiing mr-2"></i>Equipment
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item @if(Route::is('static.equipment')) active @endif" href="{{ route('static.equipment') }}">
                            <i class="fas fa-fw fa-snowboarding mr-2"></i>Ski, Snowboard & Accessories
                        </a>
                        <a class="dropdown-item @if(Route::is('static.gates')) active @endif"
                        href="{{ route('static.gates') }}">
                            <i class="fas fa-fw fa-flag mr-2"></i>Race Gates
                        </a>
                    </div>
                </li>
            </ul>

            <!-- auth links -->
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('login')) active @endif" href="{{ route('login') }}">
                            <i class="fas fa-fw fa-key mr-2"></i>{{ __('Login') }}
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('register')) active @endif" href="{{ route('register') }}">
                                <i class="fas fa-fw fa-user-plus mr-2"></i>{{ __('Register') }}
                            </a>
                        </li>
                    @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle @if(Route::is('account*')) active @endif" href="#" role="button" data-toggle="dropdown" v-pre>
                            <i class="fas fa-fw fa-user-circle mr-2"></i>{{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item @if(Route::is('account.index')) active @endif" href="{{ route('account.index') }}">
                                <i class="fas fa-fw fa-user mr-2"></i>Account
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-fw fa-sign-out-alt mr-2"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
