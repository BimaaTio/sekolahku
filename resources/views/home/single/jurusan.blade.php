@extends('home.app')
@section('title', 'Jurusan')
@section('content')
<section class="py-32 dark:bg-dark">
  <div class="container dark:bg-secondary mt-3">
    <div class="flex w-full md:w-auto items-center space-x-4">
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
      <h1 class="text-2xl tracking-wide lg:text-3xl dark:text-white mt-5">{{ strtoupper($data->singkatan) }}</h1>
      <div class="flex-1 border-b border-primary mt-5 dark:border-white"></div>
    </div>
    <div class="flex flex-wrap md:pr-4">
      <div class="w-80 lg:w-1/2 items-center justify-center sm:w-64 min-[384]:w-80 min-[344]:items-center mt-4">
        <div class="grid grid-cols-1 mb-6">
          <div class="h-auto mt-4">
            <img src="/img/{{ $data->logo }}" alt="Shoes" />
          </div>
        </div>
      </div>
      <div class="w-80 lg:w-2/3  mt-4">
        <div class="grid grid-cols-1 mb-6">
          <div class="max-w-full mt-4 ml-2">
            <ul class="dark:text-white">
              <li>
                <h2 class="text-lg font-semibold mb-3"> {{ $data->nama }} </h2>
                <p>
                  {!! $data->konten !!}
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <a href="/jurusan" class="link">Back</a>
  </div>
</section>
@include('home.partials.footer')
@endsection