<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a href="/" class="navbar-brand">TODO App</a>
    <button
        class="navbar-toggle"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportContent"
        aria-expantep="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar navbar-collape" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
            </li>
            @else
            <li class="nav-item">
                <a  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>

            <li class="nav-item">
                 <a  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endauth
        </ul>
    </div>
</header>
