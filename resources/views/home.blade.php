@extends('layouts.index')

@section('content')
    @include('partials.preloder')
    @include('partials.nav')
    @include('partials.hero')
    @include('sections.about')
    @include('sections.testimonial')
    @include('sections.services')
    @include('sections.team')
    @include('sections.promo')
    @include('partials.contact')
    @include('partials.footer')
@endsection
