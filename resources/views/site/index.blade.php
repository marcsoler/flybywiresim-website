@extends('site.layout')
@section('content')
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
                <a class="nav-link" href="{{ route('site') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FEATURES</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    PILOTS
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
                    DEVELOPERS
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
                    COMMUNITY
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">NOTAMS/BLOG</a>
                    <a class="dropdown-item" href="https://discord.gg/flybywire">Discord</a>
                    <a class="dropdown-item" href="https://www.youtube.com/channel/UCX-dvWU-YQi5U2UjUBtrthg">Youtube</a>
                    <a class="dropdown-item" href="https://twitter.com/FlybywireSim">Twitter</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<section id="index" class="text-white">
    <div class="container position-absolute">
        <h1><span class="fbw-b-text">A32</span><span class="fbw-db-text">N</span>X</h1>
        <p class="text-wrap">A <span class="fbw-b-text">Community</span> built and maintained project aiming to provide
            study-level aircraft for Microsoft Flight Simulator 2020</p>

        <a href="#download"><button type="button"
                class="btn btn-info btn-lg mr-1 px-5 rounded-pill">Download</button></a>
        <button type="button" class="btn btn-outline-light btn-lg px-4 rounded-pill rounded-lg">NOTAMS</button>
    </div>

    <span class="overlay"></span>
    <video src="{{ asset('core/mp4/A32NX.mp4') }}" autoplay loop muted></video>
    <img src="{{ asset('core/svg/FBW-Web-Header.svg') }}"></img>
</section>

<section id="download" class="fbw-b-bg p-5">
    {{-- todo: remove --}}
    <img src="{{asset('core/img/cat.gif') }}" alt="">
    <div class="container text-center mb-5">
        <h1 class="font-regular text-white">
            Download and Fly
        </h1>
    </div>
    <div class="card-deck text-center d-block d-lg-flex">
        <div class="card shadow-lg card-rounded text-light my-3 fbw-b-drk-bg">
            <div class="card-body">
                <h5 class="card-title font-heavy p-3">GitHub Progress</h5>
                <p class="card-text">Check out our latest progress at GitHub. If you're interested in helping us with
                    development or quality control then you can start today!</p>
                <p class="font-regular font-italic">Checkout our GitHub below</p>
            </div>
            <div class="container p-3">
                <button type="button" class="btn btn-lg rounded-pill w-50 btn-outline-light text-uppercase">More
                    Info</button>
            </div>
            <div class="card-footer card-rounded">
                <p class="card-text">Latest issue 3 mins ago</p>
            </div>
        </div>
        <div class="card shadow-lg fbw-gb-bg card-rounded">
            <div class="card-body">
                <h5 class="card-title font-heavy p-3">Stable Release</h5>
                <p class="card-text">Install our latest stable release via the installer or follow us to our GitHub for
                    instructions to install manually. To learn how to install click below.</p>
                <p class="font-regular font-italic">Support can be provided on Discord</p>
            </div>
            <div class="container p-3">
                <button type="button" class="btn btn-lg rounded-pill w-50 btn-info text-uppercase">Learn How</button>
            </div>
            <div class="card-footer">
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
        <div class="card shadow-lg card-rounded text-light my-3 fbw-b-drk-bg">
            <div class="card-body">
                <h5 class="card-title font-heavy p-3">Development Master</h5>
                <p class="card-text">Install our latest <b class="fbw-gb-text font-heavy">DEVELOPMENT</b> version via
                    the installer or follow us to our GitHub for instructions to install manually. To learn how to
                    install click below.</p>
                <p class="font-regular font-italic fbw-gb-text">Some features may not be stable</p>
            </div>
            <div class="container p-3">
                <button type="button" class="btn btn-lg rounded-pill w-50 btn-outline-light text-uppercase">More
                    Info</button>
            </div>
            <div class="card-footer">
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
    </div>
</section>
<section id="gnd-school" class="fbw-gb-bg shadow-lg py-5">
    <div class="container-fluid px-5 mx-auto text-white d-block d-lg-flex">

        <div class="card img-fluid mx-2 card-rounded">
            <img class="card-img-top" src="{{ asset('core/img/gndskl/cockpit2.jpg') }}">
            <div class="card-img-overlay text-center justify-content-center">
                <h4 class="card-title fbw-b-text font-regular text-uppercase">Ground School</h4>
                <p class="card-text">Before you take to the skies, visit our ground school to learn about the the various systems included and how to fly the A32NX.</p>
                <div class="container">
                    <a href="#" class="btn btn-info">Learn</a>
                </div>
            </div>
        </div>
        <div class="card img-fluid mx-2 card-rounded">
            <img class="card-img-top" src="{{ asset('core/img/gndskl/cockpit1.jpg') }}">
            <div class="card-img-overlay text-center">
                <h4 class="card-title font-regular text-uppercase">Expanded Functionality</h4>
                <p class="card-text">Our team and volunteer developers are constantly implementing study-level features to make your simulator experience as close to reality as possible.</p>
                <div class="container">
                    <a href="#" class="btn btn-info">Read More</a>
                </div>
            </div>
        </div>
      </div>
</section>
@endsection
