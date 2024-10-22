@extends('layouts.landingpage')

@section('title', 'GISHA - HOME')

@section('content')

    @include('components.landingPage.hero')
    @include('components.landingPage.featuresApp')
    @include('components.landingPage.footer')

@endsection
