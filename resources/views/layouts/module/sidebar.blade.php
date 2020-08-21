
        <ul class="navbar-nav">
            @if (Auth::user()->is_admin == true)
            <li class="nav-item">
                <a class="nav-link" href="/admin/home">
                    <i class="ni ni-chart-pie-35 text-info"></i>
                        <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/admin/post">
                    <i class="ni ni-chart-pie-35 text-info"></i>
                        <span class="nav-link-text">Manajemen Posting</span>
                </a>
            </li> --}}
            @else
            @endif

            <li class="nav-item">
                <a class="nav-link" href="#navbar-web" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboard">
                  <i class="ni ni-book-bookmark text-primary"></i>
                  <span class="nav-link-text">Webiste</span>
                </a>
                <div class="collapse" id="navbar-web">
                <ul class="nav">                     
                      <li class="nav-item">
                          <a class="nav-link" href="/halal">
                              <i class="ni ni-delivery-fast text-info"></i>
                                  <span class="nav-link-text">Website Halal</span>
                          </a>
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="ni ni-delivery-fast text-info"></i>
                                <span class="nav-link-text">Website Kurban</span>
                        </a>
                    </li>          
                </ul>
                </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboard">
                <i class="ni ni-book-bookmark text-primary"></i>
                <span class="nav-link-text">Manajemen Qurban</span>
              </a>
              <div class="collapse" id="navbar-dashboards">
              <ul class="nav">                   

                    @if (Auth::user()->nama_role == "admin")

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form-penyuplai.index') }}">
                            <i class="ni ni-delivery-fast text-info"></i>
                                <span class="nav-link-text">Form Penyulai</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form-penerima.index') }}">
                            <i class="ni ni-istanbul text-info"></i>
                                <span class="nav-link-text">Form Penerima</span>
                        </a>
                    </li>

                    @elseif (Auth::user()->nama_role == "penyuplai")                              

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form-penyuplai.index') }}">
                            <i class="ni ni-delivery-fast text-info"></i>
                                <span class="nav-link-text">Form Penyulai</span>
                        </a>
                    </li>
                    
                    @else                              

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form-penerima.index') }}">
                            <i class="ni ni-istanbul text-info"></i>
                                <span class="nav-link-text">Form Penerima</span>
                        </a>
                    </li>

                    @endif
          
                </ul>
              </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#navbar-umkm" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboard">
                  <i class="ni ni-book-bookmark text-primary"></i>
                  <span class="nav-link-text">Manajemen UMKM</span>
                </a>
                <div class="collapse" id="navbar-umkm">
                <ul class="nav">                     
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('umkm.index') }}">
                              <i class="ni ni-delivery-fast text-info"></i>
                                  <span class="nav-link-text">Daftar Umkm</span>
                          </a>
                      </li>          
                  </ul>
                </div>
              </li>

            @if (Auth::user()->is_admin == true)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="ni ni-single-02 text-info"></i>
                        <span class="nav-link-text">Manajemen User</span>
                </a>
            </li>
            @else
            @endif
        </ul>