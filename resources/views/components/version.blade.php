@extends('layouts.app')

@section('content')
    <div class="container-fluid text-right fixed-bottom">
        @if(config('version.num') != null)
        @show
        <h1>{{ config('version.num') }}</h1>
        @endif
    </div>
@endsection