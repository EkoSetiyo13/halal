@extends('layouts.admin')

@section('title')
  <title>Daftar UMKM Binaan Halal</title>
@endsection

@section('content')
  <main class="main">
    <ol class="breadcrumb">
      {{-- <li class="breadcrumb-item">UMKM</li>
      <li class="breadcrumb-item active">Daftar</li> --}}
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">


            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h4 class="card-title">
                  Data UMKM
                </h4>
              </div>
              @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
              <div class="table-responsive py-4">
                @component('umkm.components.umkm_table', compact('umkms'))
                @endcomponent
              </div>
            </div>
            <!-- modal -->
            <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">IMPORT DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                      <button type="submit" class="btn btn-success">IMPORT</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
@endsection