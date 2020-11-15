@section('download')
<section id="download" class="fbw-b-bg p-5">
    <img src="{{asset('core/img/cat.gif') }}" alt="">
    <div class="container text-center mb-5">
        <h1 class="font-regular text-white">
            Download and Fly
        </h1>
    </div>
    <div class="card-deck text-center">
        <div class="card shadow-lg card-rounded text-light fbw-b-drk-bg">
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
            <div class="card-footer">
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
        <div class="card shadow-lg card-rounded text-light fbw-b-drk-bg">
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
@endsection