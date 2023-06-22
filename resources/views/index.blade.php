<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolahku</title>

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/input.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
  <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark')
    } else {
      document.documentElement.classList.remove('dark')
    }
  </script>
</head>

<body>
  <!-- Navbar -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home" class="font-bold text-primary text-lg block py-6">SEKOLAHKU</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-slate-500 lg:dark:bg-transparent">
            <ul class="block lg:flex">
              <li class="group">
                <a href="/" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Beranda</a>
              </li>
              <li class="group">
                <a href="/berita" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Berita</a>
              </li>
              <li class="group">
                <a href="/galeri" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Galeri</a>
              </li>
              <li class="group">
                <a href="/jurusan" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Jurusan</a>
              </li>
              <li class="group">
                <div class="dropdown dropdown-hover">
                  <label tabindex="0" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Profil</label>
                  <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>VISI</a></li>
                    <li><a>MISI</a></li>
                    <li><a>Kepala Sekolah</a></li>
                  </ul>
                </div>
              </li>
              <li class="group">
                <a href="/contact" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Contact</a>
              </li>
              @auth
              <li class="group">
                <a href="/dashboard" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Dashboard</a>
              </li>
              @else
              <li class="group">
                <a href="/login" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Login</a>
              </li>
              @endauth
              <li class="flex items-center lg:mt-0 pl-8">
                <div class="flex">
                  <span class="mr-2 text-sm text-secondary">Light</span>
                  <input type="checkbox" class="hidden" id="dark-toggle">
                  <label for="dark-toggle">
                    <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-400 p-1">
                      <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out">
                      </div>
                    </div>
                  </label>
                  <span class="mr-2 text-sm text-secondary"> Dark</span>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- /Navbar -->

  <!-- Hero Section Start -->
  <section id="home" class="pt-36 dark:bg-dark">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2" data-aos="fade-right" data-aos-duration="1000">
          <h1 id="" class="text-base font-semibold text-primary md:text-xl dark:text-white"><span id="typed"></span><span id="typed2" class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">SEKOLAHKU</span>
          </h1>
          <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Selamat Datang di <span class="text-dark dark:text-white"> Sekolahku</span></h2>
          <p class="font-medium text-secondary mb-10 leading-relaxed">Terakreditasi A</p>
          <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">PPDB</a>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2" data-aos="fade-left" data-aos-duration="1000">
          <div class="relative mt-10 lg:mt-9 lg:right-0 splide">
            <div class="w-full carousel rounded-box splide__track">
              <ul class="splide__list">
                <li class="carousel-item w-full splide__slide">
                  <img src="/img/slide1.jpg" alt="Tailwind CSS Carousel component" />
                </li>
                <li class="carousel-item w-full splide__slide">
                  <img src="/img/slide2.jpg" alt="Tailwind CSS Carousel component" />
                </li>
                <li class="carousel-item w-full splide__slide">
                  <img src="/img/slide3.jpg" alt="Tailwind CSS Carousel component" />
                </li>
                <li class="carousel-item w-full splide__slide">
                  <img src="/img/slide4.jpg" alt="Tailwind CSS Carousel component" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- /endhero -->

  <!-- section Sambutan Kepala Sekolah -->
  <section id="about" class="pt-36 pb-32 dark:bg-dark">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full lg:w-1/5" data-aos="fade-up" data-aos-duration="1000">
          <div class="avatar md:mb-2 md:items-center md:text-center sm:items-center">
            <div class="w-44 rounded-full">
              <img src="/img/avatar.png" />
            </div>
          </div>
        </div>
        <div class="w-full mb-10 lg:w-1/2" data-aos="fade-down" data-aos-duration="1000">
          <h4 class="font-bold uppercase text-primary text-lg mb-3">
            Kepala Sekolah</h4>
          <h2 class="font-bold text-dark text-3xl mb-5 max-w-xl lg:text-4xl dark:text-white">Bima Tio Rachman
          </h2>
          <p class="font-medium text-base text-secondary lg:text-lg">Umur saya 18 tahun dan saya adalah fresh
            graduate
            dari SMK Muhammadiyah 1 Muntilan dengan jurusan Rekayasa Perangkat Lunak</p>
        </div>

      </div>
  </section>
  <!-- end sambutan kepsek -->
  <!-- Skill -->
  <section id="skill" class="pt-36 pb-16 bg-slate-800 dark:bg-slate-600">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold uppercase text-lg text-primary mb-2">JEJAK PRESTASI</h4>
        </div>
      </div>
      <div class="w-full px-4">
        <div class="flex flex-nowrap items-center justify-center">

          <div class="mb-12 p-4 lg:mx-8 xl:mx-8">
            <a href="#" class="max-w[120px] mx-4 py-4 text-orange-600 grayscale opacity-60 text-center transition
              hover:grayscale-0 hover:opacity-100">
            </a>
            <p class="font-medium text-base text-white dark:text-dark text-center">10</p>
            <h3 class="font-semibold text-xl mt-5 mb-3 text-white dark:text-black">Tingkat Kabupaten</h3>
          </div>
          <div class="mb-12 p-4 lg:mx-8 xl:mx-8">
            <a href="#" class="max-w[120px] mx-4 py-4 text-orange-600 grayscale opacity-60 text-center transition
              hover:grayscale-0 hover:opacity-100">
            </a>
            <p class="font-medium text-base text-white dark:text-dark text-center">20</p>
            <h3 class="font-semibold text-xl mt-5 mb-3 text-white dark:text-black">Tingkat Nasional</h3>
          </div>
          <div class="mb-12 p-4 lg:mx-8 xl:mx-8">
            <a href="#" class="max-w[120px] mx-4 py-4 text-orange-600 grayscale opacity-60 text-center transition
              hover:grayscale-0 hover:opacity-100">
            </a>
            <p class="font-medium text-base text-white dark:text-dark text-center">2</p>
            <h3 class="font-semibold text-xl mt-5 mb-3 text-white dark:text-black">Tingkat Provinsi</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SKill -->
  <a href="#home" id="to-top" class="items-center justify-center fixed bottom-4 right-4 z-[9999] h-14 w-14 bg-primary rounded-full hidden p-4 hover:animate-pulse">
    <span class="block w-5 h-5 rotate-45 border-t-2 border-l-2 mt-2 "></span>
  </a>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="/sb/vendor/jquery/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script type="text/javascript">
    AOS.init({
      mirroring: true
    })
    new Splide('.splide', {
      autoplay: true,
      rewind: true,
    }).mount();
  </script>
</body>

</html>