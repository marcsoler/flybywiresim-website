@extends('site.layout')
@section('content')

<section id="index" class="text-white">
    <div class="container position-absolute">
        <h1 class="animate__animated animate__fadeInDown"><span class="fbw-b-text">A32</span><span class="fbw-db-text">N</span>X</h1>
        <p class="text-wrap animate__animated animate__fadeIn">A <span class="fbw-b-text">Community</span> built and maintained project aiming to provide
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
    <div class="container text-center mb-5">
        <h1 class="font-regular text-white">
            Download and Fly
        </h1>
    </div>
    <div class="card-deck text-center d-block d-lg-flex">
        <div class="card shadow-lg card-rounded text-light my-3 fbw-b-drk-bg">
            <div class="card-body">
                <h5 class="card-title font-heavy p-3"><i class="fab fa-github"></i> GitHub Progress</h5>
                <p class="card-text">Check out our latest progress at GitHub. If you're interested in helping us with
                    development or quality control then you can start today!</p>
                <p class="font-regular font-italic">Checkout our GitHub below</p>
            </div>
            <div class="container p-3">
                <button type="button" class="btn btn-lg rounded-pill w-50 btn-outline-light text-uppercase">{{__('More
                    Info')}}</button>
            </div>
        </div>
        <div class="card shadow-lg bg-light card-rounded animate__animated animate__bounceIn">
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
                {{ $release['name'] }}
            </div>
        </div>
        <div class="card shadow-lg card-rounded text-light my-3 fbw-b-drk-bg">
            <div class="card-body">
                <h5 class="card-title font-heavy p-3"><i class="fas fa-code-branch"></i> Development Master</h5>
                <p class="card-text">Install our latest <b class="fbw-gb-text font-heavy">DEVELOPMENT</b> version via
                    the installer or follow us to our GitHub for instructions to install manually. To learn how to
                    install click below.</p>
                <p class="font-regular font-italic fbw-gb-text">Some features may not be stable</p>
            </div>
            <div class="container p-3">
                <button type="button" class="btn btn-lg rounded-pill w-50 btn-outline-light text-uppercase">More
                    Info</button>
            </div>
        </div>
    </div>
</section>
<section id="gnd-school" class="fbw-gb-bg shadow-lg py-5">
    <h1 class="text-dark font-heavy text-center mb-5 px-5 align-middle">We are <span class="text-light fbw-b-bg p-2 pb-3 m-2 rounded-lg">more</span> than a Community</h1>
    
    <div class="container-fluid px-5 mx-auto text-white d-block d-lg-flex">

        <div class="card img-fluid mx-4 mb-sm-5 card-rounded card-shadow">
            <img class="card-img-top" src="{{ asset('core/img/gndskl/cockpit2.jpg') }}">
            <div class="card-img-overlay text-center justify-content-center">
                <h4 class="card-title fbw-b-text font-regular text-uppercase">Ground School</h4>
                <p class="card-text">Before you take to the skies, visit our ground school to learn about the the various systems included and how to fly the A32NX.</p>
                <div class="container">
                    <a href="#" class="btn text-info">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>    
        </div>

        <div class="card img-fluid mx-4 card-rounded card-shadow">
            <img class="card-img-top" src="{{ asset('core/img/gndskl/cockpit1.jpg') }}">
            <div class="card-img-overlay text-center container">
                <h4 class="card-title fbw-b-text font-regular text-uppercase">Enhanced Functionality</h4>
                <p class="card-text">Our team and volunteer developers are constantly implementing study-level features to make your simulator experience as close to reality as possible.</p>
                <div class="container">
                    <a href="#" class="btn text-info">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
      </div>

      <div class="container-fluid px-5 py-2 mx-auto text-white d-block d-lg-flex">
        <div class="card img-fluid mx-4 my-5 card-rounded card-shadow">
            <img class="card-img-top" src="{{ asset('core/img/gndskl/cockpit1.jpg') }}">
            <div class="card-img-overlay text-center container">
                <h4 class="card-title fbw-b-text font-regular text-uppercase">Other Projects</h4>
                <p class="card-text">We have other projects under development! Why not learn more about what is coming in the near future.</p>
                <div class="container">
                    <a href="#" class="btn text-info">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="card img-fluid mx-4 my-5 card-rounded card-shadow">
            <img class="card-img-top" src="{{ asset('core/img/gndskl/cockpit1.jpg') }}">
            <div class="card-img-overlay text-center container">
                <h4 class="card-title fbw-b-text font-regular text-uppercase">3D Modeling</h4>
                <p class="card-text">The volunteer 3D Design team are always working hard to make mockups and new concepts for the aircraft!</p>
                <div class="container">
                    <a href="#" class="btn text-info">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="card img-fluid mx-4 my-5 card-rounded card-shadow">
            <img class="card-img-top" src="{{ asset('core/img/gndskl/cockpit1.jpg') }}">
            <div class="card-img-overlay text-center container">
                <h4 class="card-title fbw-b-text font-regular text-uppercase">Livery</h4>
                <p class="card-text">Fly our colors using the bundled high resolution FBW livery.</p>
                <div class="container">
                    <a href="#" class="btn text-info">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
      </div>
</section>

{{-- @todo: COUNT TO JS --}}
<section id="stats">
    <div class="py-4 p-5 container d-md-flex text-center text-white">
        <div class="container">
            @if ($release['assets'][0]['download_count'] != null)
                <h1 id="download-count" class="fbw-b-text" data-number="{{$release['assets'][0]['download_count']}}">
                </h1>
                @else
                <h1 id="download-count" class="fbw-b-text" data-number="165000">
                </h1>
            @endif
            <h5>Downloads</h5>
        </div>
        <div class="container">
            @if ($contributors != null)
                <h1 id="contributor-count" class="fbw-b-text" data-number="{{$contributors}}">
                </h1>
                @else
                <h1 id="contributor-count" class="fbw-b-text" data-number="100">
                </h1>
            @endif
            <h5>Contributors</h5>
        </div>
        <div class="container">
            <h1 id="commit-count" class="fbw-b-text" data-number="2500">
            </h1>
            <h5>Commits</h5>
        </div>
        <div class="container">
            <h1 id="flight-count" class="fbw-b-text" data-number="{{$live_flights}}">
            </h1>
            <h5>Live Flights</h5>
        </div>
    </div>
</section>

<section id="livemap">

</section>

<section id="partners" class="fbw-dg-bg">
    <div class="py-4 p-5 container text-center text-white">
        <div class="container">
            <h1 class="font-regular"><span class="text-light fbw-b-bg p-2 pb-3 m-2 rounded-lg">Partners</span></h1>
        </div>
        
        <div class="d-block d-md-flex my-5 pt-2">
            <div class="container">
                <img src="{{ asset('core/partners/fsnews-full.png') }}" alt="">
            </div>
            <div class="container col-8 col-md-2">
                <img src="{{ asset('core/partners/sim4flight.png') }}" alt="">
            </div>
            <div class="container">
                <img src="{{ asset('core/partners/flightsimto.png') }}" alt="">
            </div>
        </div>

        <div class="container">
            <img src="{{ asset('core/partners/yourcontrols-white.png') }}" alt="">
        </div>
    </div>
</section>

@endsection
