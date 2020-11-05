<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('core/svg/white/FBW-Logo-WHITE.svg') }}" width="190">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="ml-auto navbar-nav mx-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Home Page') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Features') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Pilots/Developers') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Media') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('About') }}</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ground School</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Cold and Dark</a>
                      <a class="dropdown-item" href="#">MCDU</a>
                      <a class="dropdown-item" href="#">Tutorials</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Config</a>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
