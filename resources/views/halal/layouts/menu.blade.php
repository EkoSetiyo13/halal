<ul class="nav navbar-nav mr-auto center_nav pull-right">
  <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#welcome"
                                            class="active">Beranda</a></li>
  <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#about">Tentang
      Kami</a></li>
  <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#services">UMKM</a>
  </li>
  <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white"
                                            href="{{ route('halal') }}#frequently-question">FAQ</a></li>
  <li class="submenu nav-item"><a class="nav-link" style="color:white" href="javascript:;">DAFTAR BINAAN</a>
    <ul>
      <li class="scroll-to-section nav-item"><a class="nav-link" href="{{ route('binaan') }}">Binaan UMKM</a></li>
      <li class="scroll-to-section nav-item"><a class="nav-link" href="{{ route('kader') }}">Binaan Kader</a></li>
    </ul>
  </li>
  <li class="submenu nav-item"><a class="nav-link" style="color:white" href="javascript:;">Dosen & Mahasiswa</a>
    <ul>
      <li class="scroll-to-section nav-item"><a class="nav-link" href="{{ route('data.dosen') }}">Dosen</a></li>
      <li class="scroll-to-section nav-item"><a class="nav-link" href="{{ route('data.mahasiswa') }}">Mahasiswa</a></li>
    </ul>
  </li>
  <li class="scroll-to-section nav-item">
    <a class="nav-link" style="color:white" href="{{ route('halal') }}#contact-us">Lokasi</a>
  </li>
  <li class="scroll-to-section nav-item">
    <a class="nav-link" style="color:white" href="{{ route('tanya-halal') }}">Tanya Halal</a>
  </li>
  @if (Route::has('login'))
    @auth
      <li class="nav-item">
        @if (Auth::user()->is_admin == 1)
          <a class="nav-link" href="{{ url('admin/halal') }}" style="color:white">Dashboard</a>
        @endif
      </li>
    @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}" style="color:white">Login</a>
      </li>
    @endauth
  @endif
</ul>


