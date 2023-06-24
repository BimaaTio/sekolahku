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
              <a href="/" class="text-base text-dark mx-8 py-2 flex {{ ($title === "Home" ? 'text-primary' : '') }} group-hover:text-primary dark:text-white">Beranda</a>
            </li>
            <li class="group">
              <a href="/berita" class="text-base text-dark mx-8 py-2 flex {{ (str_contains($title, 'Berita') ? 'text-primary' : '') }} group-hover:text-primary dark:text-white">Berita</a>
            </li>
            <li class="group">
              <a href="/galeri" class="text-base text-dark mx-8 py-2 flex {{ ($title === "Galeri" ? 'text-primary' : '') }} group-hover:text-primary dark:text-white">Galeri</a>
            </li>
            <li class="group">
              <a href="/jurusan" class="text-base text-dark mx-8 py-2 flex {{ ($title === "Jurusan" ? 'text-primary' : '') }} group-hover:text-primary dark:text-white">Jurusan</a>
            </li>
            <li class="group">
              <div class="dropdown dropdown-hover">
                <label tabindex="0" class="text-base text-dark mx-8 py-2 flex group-hover:text-primary dark:text-white">Profil</label>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                  <li><a>VISI</a></li>
                  <li><a>MISI</a></li>
                  <li><a>Prestasi</a></li>
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
                <span class="mr-2 text-sm text-secondary dark:text-white">Light</span>
                <input type="checkbox" class="hidden" id="dark-toggle">
                <label for="dark-toggle">
                  <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-400 p-1">
                    <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out">
                    </div>
                  </div>
                </label>
                <span class="mr-2 text-sm text-secondary dark:text-white"> Dark</span>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>