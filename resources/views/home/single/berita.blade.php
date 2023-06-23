@extends('home.app')
@section('title', 'Berita')
@section('content')
<section class="py-32 dark:bg-dark">
  <div class="container dark:bg-secondary mt-3">
    <div class="flex w-full items-center space-x-4">
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
      <h1 class="text-3xl tracking-wide lg:text-3xl dark:text-white mt-5">{{ $data['judul'] }}</h1>
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
    </div>
    <div class="flex flex-wrap">
      <div class="w-80 lg:w-1/4 items-center justify-center sm:w-56 mt-4">
        <div class="grid grid-cols-1 mb-6">
          <div class="max-w-full h-auto mt-4">
            <img src="/img/s1.jpg" alt="Shoes" />
          </div>
        </div>
      </div>
      <div class="w-80 lg:w-1/2  mt-4">
        <div class="grid grid-cols-1 mb-6">
          <div class="max-w-full mt-4 ml-3">
            <ul>
              <div class="badge badge-outline my-2"> {{ $data->kategori->nama }} </div>
              <li>Penulis : {{ $data->user->username }} </li>
              <li>
                <p>
                  {{ $data->konten }}
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('home.partials.footer')
@endsection