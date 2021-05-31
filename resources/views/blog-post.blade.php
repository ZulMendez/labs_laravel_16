@extends('layouts.index')

@section('content')
    @include('partials.preloder')
    @include('partials.nav')
    @include('sections.blog-post.index')
    @include('partials.footer')
@endsection