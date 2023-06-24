@extends('home.app')
@section('title', 'Kategori Berita')
@section('content')
<section class="pt-32 dark:bg-dark">
  <div class="container dark:bg-secondary mt-3">
    <div class="flex w-full items-center space-x-4">
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
      <h1 class="text-3xl tracking-wide lg:text-3xl dark:text-white mt-5">Semua Kategori</h1>
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
    </div>
    <div class="w-full px-4 mt-5 flex  flex-wrap  xl:mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2  lg:grid-cols-4 mb-6">
        @foreach($data as $d)
        <div class="card w-72 mx-2 my-2 bg-base-100 shadow-xl image-full">
          <div class="card-body">
            <a href="/berita/kategori/{{ $d->slug }}" class="link">
              <h2 class="font-semibold text-lg text-center items-center">{{ $d->nama }}</h2>
            </a>
          </div>
        </div>
        @endforeach
      </div>
</section>
@include('home.partials.footer')
@endsection