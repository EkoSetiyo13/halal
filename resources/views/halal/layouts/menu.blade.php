<ul class="nav navbar-nav center_nav pull-right">
    
    <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#welcome" class="active">Beranda</a></li>
    <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#about">Tentang Kami</a></li>
    <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#services">UMKM</a></li>
    <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#frequently-question">FAQ</a></li>
    <li class="submenu nav-item"> <a class="nav-link" style="color:white"  href="javascript:;">DAFTAR BINAAN</a>
    <ul>
        <li class="scroll-to-section nav-item"><a class="nav-link" href="{{ route('binaan') }}">Semua</a></li>
        <li class="scroll-to-section nav-item"><a class="nav-link"  href="">Kelas A</a></li>
        <li class="scroll-to-section nav-item"><a class="nav-link" href="">Kelas B</a></li>
        <li class="scroll-to-section nav-item"><a class="nav-link"  href="">Kelas C</a></li>
    </ul>
    </li>
    <li class="scroll-to-section nav-item"><a class="nav-link" style="color:white" href="{{ route('halal') }}#contact-us">Kontak</a></li>
    @if (Route::has('login'))
    @auth
		<li class="nav-item">
            @if (Auth::user()->is_admin == 1)
            <a class="nav-link" href="{{ url('admin/home') }}" style="color:white">Dashboard</a>
            @elseif (Auth::user()->nama_role == 'penyuplai')
            <a class="nav-link" href="{{ url('member/form-penyuplai') }}" style="color:white">Dashboard</a>
            @else
            <a class="nav-link" href="{{ url('member/form-penerima') }}" style="color:white">Dashboard</a>
            @endif
        </li>
        @else
        <li class="nav-item">    
            <a class="nav-link" href="{{ route('login') }}" style="color:white">Login</a>
        </li>    
        @if (Route::has('register'))
        <li class="nav-item">
		    <a class="nav-link" href="{{ route('register') }}" style="color:white">Register</a>    							
        </li>
        @endif
    @endauth
	@endif
    {{-- @if (Route::has('login'))
    @auth
		<li class="nav-item">
            @if (Auth::user()->is_admin == 1)
            <a class="nav-link" href="{{ url('admin/home') }}" style="color:white">Dashboard</a>
            @elseif (Auth::user()->nama_role == 'penyuplai')
            <a class="nav-link" href="{{ url('member/form-penyuplai') }}" style="color:white">Dashboard</a>
            @else
            <a class="nav-link" href="{{ url('member/form-penerima') }}" style="color:white">Dashboard</a>
            @endif
        </li>
        @else
        <li class="nav-item">    
            <a class="nav-link" href="{{ route('login') }}" style="color:white">Login</a>
        </li>    
        @if (Route::has('register'))
        <li class="nav-item">
		    <a class="nav-link" href="{{ route('register') }}" style="color:white">Register</a>    							
        </li>
        @endif
    @endauth
	@endif --}}

</ul>


