@extends('layouts.index')

@section('content')
    @include('partials.preloder')
    @include('partials.nav')
    @include('sections.services.index')
    @include('partials.newsletter')
    @include('partials.contact')
    @include('partials.footer')
@endsection