@extends('layouts.app')
@extends('components.nav')

@section('head')
<link href="{{ asset('css/landing/index.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="index-top">
        <div id="index-head" class="container text-light">
            <h1>A32NX</h1>
            <div class="row-cols-2 text-left">
                <h5>A <span class="lblue-accent">C</span>ommunity built and driven mod to create a study level A320 Neo for Microsoft Flight Simulator 2020.</h5>
            </div>
        </div>

        <div id="index-bg">
            <span id="index-overlay"></span>
            <video src="{{ asset('core/mp4/A32NX.mp4')}}" loop muted autoplay preload="true"></video>
            <span id="index-waves">
                <img src="{{ asset('core/svg/FBW-Web-Header.svg')}}">
            </span>
        </div>
    </section>

    <section id="index-download" class="fbw-b-bg p-5">
        <h1 class="bold text-light text-center pb-3">Download & Fly</h1>
        <div class="d-block d-md-flex justify-content-center row-cols-2 container py-4">
            <div class="card text-center m-2 rounded-lg" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title bold">Latest Master</h5>
                    <p class="card-text">
                        Our master version contains all the latest features developed!
                        You may encounter bugs along the way.
                    </p>
                    <span class="text-center text-danger bold">Support is not Guaranteed</span>
                    <a href="#" class="btn rounded-pill btn-dark container mt-3 p-3">GIT ICON - INSTALL HERE</a>
                </div>
                <div class="card-footer text-muted">
                    GIT API
                </div>
            </div>

            <div class="card text-center m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Stable Release - GIT API</h5>
                    <p class="card-text">
                        Our latest release candidate.
                        To learn how to install click below.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
    </section>
@endsection