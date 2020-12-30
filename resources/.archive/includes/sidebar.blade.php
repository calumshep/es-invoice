<div class="text-center">
    <h3 class="mb-2">{{ Auth::user()->name }}</h3>
    <p class="mb-0">Administrator</p>
    <small class="text-muted">{{ Auth::user()->email }}</small>
</div>

<hr class="my-4">

<nav class="nav nav-pills flex-column">
    <a class="nav-item nav-link @if(Request::is('account')) active @endif" href="{{ route('account.index') }}">
        <i class="fas fa-fw fa-user mr-2"></i>Account
    </a>

    <a class="nav-item nav-link @if(Request::is('account/invoices*')) active @endif" href="#">
        <i class="fas fa-fw fa-file-invoice mr-2"></i>Invoices
    </a>

    <a class="nav-item nav-link @if(Request::is('account/payments*')) active @endif" href="#">
        <i class="fas fa-fw fa-hand-holding-usd mr-2"></i>Payments
    </a>

    <h5 class="ml-3 mt-4"><strong>Content</strong></h5>

    <a class="nav-item nav-link @if(Request::is('account/services*')) active @endif" href="{{ route('account.services.index') }}">
        <i class="fas fa-fw fa-tools mr-2"></i>Services
    </a>
</nav>
