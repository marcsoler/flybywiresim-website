@extends('layouts.app')

<head>
    <link href='{{ asset('css/landing/index.css') }}'>
</head>

@section('content')
    <img src="{{ asset('core/svg/FBW-Logo.svg') }}" width="300px"></img>
    @if(config('version.vernum') != null)
    <h1>{{ config('version.vernum') }}</h1>
    @else
    <p>version. <span class="text-danger">null</span></p>
    @endif
@endsection