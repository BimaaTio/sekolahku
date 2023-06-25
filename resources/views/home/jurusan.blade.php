@extends('home.app')
@section('title', 'Jurusan')
@section('content')
<section class="pt-32 dark:bg-dark">
  <div class="container dark:bg-secondary mt-3">
    <div class="flex w-full items-center space-x-4">
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
      <h1 class="text-3xl tracking-wide lg:text-3xl dark:text-white mt-5">{{ $title }}</h1>
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
    </div>
    <div class="w-full px-4 mt-5 flex flex-wrap justify-center xl:mx-auto">
      @if($data->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2  lg:grid-cols-4 mb-6">
        @foreach($data as $d)
        <div class="card w-72 my-2 mx-3 bg-base-100 shadow-xl image-full">
          <figure><img src="/img/s1.jpg" alt="Shoes" /></figure>
          <div class="card-body justify-center">
            <a href="/jurusan/{{ $d->slug }}" class="link">
              <h2 class="card-title justify-center">{{ strtoupper($d->singkatan) }}</h2>
            </a>
          </div>
        </div>
        @endforeach
      </div>
      @else
      <div class="grid grid-cols-1 mb-4">
        <p class="text-center">Tidak Ada Berita</p>
      </div>
      @endif
    </div>
  </div>
</section>
@include('home.partials.footer')
@endsection