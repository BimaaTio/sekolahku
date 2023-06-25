<section id="berita" class="pt-36 pb-16 bg-slate-100 dark:bg-dark">
  <div class="container">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
        <h4 class="font-semibold uppercase text-lg text-primary mb-2">BERITA SEKOLAH</h4>
        <p class="font-medium text-md text-secondary">Berita Terbaru</p>
      </div>
    </div>
    <div class="w-full px-4 flex flex-wrap justify-center xl:mx-auto">
      @if($berita->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach($berita as $b)
        <div class="card glass rounded-xl ml-3 mb-4 bg-base-100 shadow-lg dark:shadow-white">
          <figure><img src="/img/s1.jpg" width="500" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">
              <a href="/berita/{{ $b->slug }}">{{ $b->judul }}</a>
              <div class="badge badge-secondary badge-outline text-sm">
                {{ $diff = Carbon\Carbon::parse($b->updated_at)->diffForHumans() }}
              </div>
            </h2>
            <p>{{ $b->excerpt }}</p>
            <a class="link text-primary" href="/berita/{{ $b->slug }}">Read More.</a>
            <div class="card-actions justify-end">
              <p class="text-sm">Post by : <a href="/berita/post-by/{{ $b->user->username }}" class="link">{{ $b->user->username }}</a></p>
              <a href="/berita/kategori/{{ $b->kategori->slug }}">
                <div class="badge badge-outline">{{ $b->kategori->nama }}</div>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a href="/berita" class="mt-2 text-dark hover:text-primary dark:text-white dark:hover:text-primary">Semua Berita</a>
      @else
      <div class="grid grid-cols-1 mb-4">
        <p class="text-center">Tidak Ada Berita</p>
      </div>
      @endif
    </div>
  </div>
</section>