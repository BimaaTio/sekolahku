@extends('home.app')
@section('title', 'Berita')
@section('content')
<section class="py-32 dark:bg-dark">
  <div class="container dark:bg-secondary mt-3">
    <div class="flex w-full items-center space-x-4">
      <div class="flex-1 border-b border-gray-500 mt-5 dark:border-white"></div>
      <h1 class="text-3xl tracking-wide lg:text-3xl dark:text-white mt-5">{{ $data->judul }}</h1>
      <div class="flex-1 border-b border-gray-500 mt-5 dark:border-white"></div>
    </div>
    <div class="flex flex-wrap md:pr-4">
      <div class="w-80 lg:w-1/4 items-center justify-center sm:w-64 min-[384]:w-80 min-[344]:items-center mt-4">
        <div class="grid grid-cols-1 mb-6">
          <div class="h-auto mt-4">
            <img src="/img/{{ $data->foto }}" alt="Shoes" />
          </div>
        </div>
      </div>
      <div class="w-80 lg:w-1/2  mt-4">
        <div class="grid grid-cols-1 mb-6">
          <div class="max-w-full mt-4 ml-2">
            <ul class="dark:text-white">
              <a href="/berita/kategori/{{ $data->kategori->slug }}">
                <div class="badge badge-accent badge-outline "> {{ $data->kategori->nama }} </div>
              </a>
              <li class="mt-1 text-gray-400">Upload by : <a href="/berita/post-by/{{ $data->user->username }}" class="link">{{ $data->user->username }}</a> </li>
              <li class="mb-2 text-gray-400">Published : {{ $diff = Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</li>

              <li>
                <h2 class="text-lg font-semibold"> {{ $data->judul }} </h2>
                <p>
                  {!! $data->konten !!}
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="w-80 lg:w-1/4">
        <div class="flex w-full sm:items-center items-center space-x-4 sm:w-auto">
          <div class="flex-1 border-b border-gray-500 mt-10 dark:border-white"></div>
          <h1 class="text-lg tracking-wide sm:text-lg dark:text-white mt-10">Berita Lainnya</h1>
          <div class="flex-1 border-b border-gray-500 mt-10 dark:border-white"></div>
        </div>
        <div class="overflow-x-auto h-96">
          <table class="table table-pin-rows text-center">
            <tbody>
              @foreach ($berita as $b)
              <tr>
                <td>
                  <ul>
                    <li><a href="" class="link">{{ $b->judul }}</a></li>
                    <li>
                      <a href="/berita/post-by/{{ $b->user->username }}">
                        <p class="text-sm">Post by: {{ $b->user->username }} </p>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <a href="/berita" class="link">Back</a>
  </div>
</section>
@include('home.partials.footer')
@endsection