<ul class="nav navbar-nav center_nav pull-right">
    <li class="nav-item" >
        <a class="nav-link" href="{{ route('front.index') }}" style="color:white">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('front.penyuplai') }}" style="color:white">Penyuplai Qurban</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('front.penerima') }}" style="color:white">Instansi Penerima Qurban</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('front.cara-pendaftaran') }}" style="color:white">Cara Pendafataran</a>
    </li>

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
    <!-- <li class="nav-item">
        <a class="nav-link" href="contact.html" style="color:white">Kontak</a>
    </li> -->
</ul>


