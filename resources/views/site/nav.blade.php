<nav class="navbar navbar-expand-lg navbar-dark container position-absolute">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('core/svg/events/FBW-Logo-WHITE-Christmas.svg') }}" alt="Flybywire"
            width="180px">
    </a>
    <button class="navbar-toggler ml-auto mt-0" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('site') }}">{{ __('HOME') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('FEATURES') }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ __('PILOTS') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">todo</a>
                    <a class="dropdown-item" href="#">todo</a>
                    <a class="dropdown-item" href="#">todo</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ __('DEVELOPERS') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">todo</a>
                    <a class="dropdown-item" href="#">todo</a>
                    <a class="dropdown-item" href="#">todo</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ __('COMMUNITY') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">{{ __('NOTAMS/BLOG') }}</a>
                    <a class="dropdown-item" href="https://discord.gg/flybywire">{{ __('Discord') }}</a>
                    <a class="dropdown-item" href="https://www.youtube.com/channel/UCX-dvWU-YQi5U2UjUBtrthg">{{ __('Youtube') }}</a>
                    <a class="dropdown-item" href="https://twitter.com/FlybywireSim">{{ __('Twitter')}}</a>
                </div>
            </li>
        </ul>
    </div>
</nav>