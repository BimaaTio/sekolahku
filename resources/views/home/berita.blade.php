@extends('home.app')
@section('title', 'Berita')
@section('content')
<section class="pt-32 dark:bg-dark">
  <div class="container dark:bg-secondary mt-3">
    <div class="flex w-full items-center space-x-4">
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
      <h1 class="text-3xl tracking-wide lg:text-3xl dark:text-white mt-5">Semua Berita</h1>
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
    </div>
    <div class="w-full px-4 mt-5 flex flex-wrap justify-center xl:mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2  lg:grid-cols-5 mb-6">
        @foreach($data as $d)
        <div class="card glass rounded-xl ml-3 sm:mb-3 mb-3 bg-base-100 shadow-xl">
          <figure><img src="/img/s1.jpg" width="500" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">
              <a href="/berita/{{ $d->slug }}">{{ $d['judul'] }}</a>
              <div class="badge badge-secondary">NEW</div>
            </h2>
            <p>{{ $d['excerpt'] }}?</p>
            <div class="card-actions justify-end">
              <div class="badge badge-outline">Fashion</div>
              <div class="badge badge-outline">Products</div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


@include('home.partials.footer')
@endsection