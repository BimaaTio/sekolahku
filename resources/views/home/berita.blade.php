@extends('home.app')
@section('title', 'Berita')
@section('content')
<section class="pt-32 dark:bg-dark" data-aos="fade-up">
  <div class="container dark:bg-secondary mt-3">
    <div class="flex w-full items-center space-x-4">
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
      <h1 class="text-3xl tracking-wide lg:text-3xl dark:text-white mt-5">{{ $title }}</h1>
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
    </div>
    <div class="w-full px-4 mt-5 flex flex-wrap justify-center xl:mx-auto">
      @if($data->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2  lg:grid-cols-3 mb-6">
        @foreach($data as $d)
        <div class="card glass rounded-xl ml-3 sm:mb-3 mb-3 bg-base-100 shadow-lg dark:shadow-white">
          <figure><img src="/img/{{ $d->foto }}" width="500" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">
              <a href="/berita/{{ $d->slug }}">{{ $d->judul }}</a>
              <div class="badge badge-secondary badge-outline text-sm">
                {{ $diff = Carbon\Carbon::parse($d->updated_at)->diffForHumans() }}
              </div>
            </h2>
            <p>{{ $d->excerpt }}</p>
            <a class="link text-primary" href="/berita/{{ $d->slug }}">Read More.</a>
            <div class="card-actions justify-end">
              <p class="text-sm">Post by : <a href="/berita/post-by/{{ $d->user->username }}" class="link">{{ $d->user->username }}</a></p>
              <a href="/berita/kategori/{{ $d->kategori->slug }}">
                <div class="badge badge-outline">{{ $d->kategori->nama }}</div>
              </a>
            </div>
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