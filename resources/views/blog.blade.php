@extends('layouts.index')

@section('content')
    @include('partials.preloder')
    @include('partials.nav')
    @include('sections.blog.index')
    @include('partials.newsletter')
    @include('partials.footer')
@endsection