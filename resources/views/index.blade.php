@extends('home.app')
@section('title', 'Home')
@section('content')
<!-- Hero -->
@include('home.partials.hero')
<!-- /Hero -->
<!-- Sambutan -->
@include('home.partials.sambutan')
<!-- /Sambutan -->
<!-- Prestasi -->
@include('home.partials.prestasi')
<!-- /Prestasi -->
<!-- Berita -->
@include('home.partials.berita')
<!-- /Berita -->
<!-- Contact mail -->
@include('home.partials.contact')
<!-- /Contact -->
<!-- Footer -->
@include('home.partials.footer')
<!-- /Footer -->
@endsection