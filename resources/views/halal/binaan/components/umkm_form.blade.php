<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title text-center">Data Binaan</h4>
      </div>
      <div class="card-body">
        <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}" required>
        <div class="form-group">
          <label for="no_umkm" class="form-control-label">No UMKM<span class="text-danger">*</span></label>
          <input type="text" name="no_umkm" class="form-control" value="{{ old('no_umkm') ?? $umkm->no_umkm ?? null }}" placeholder="{{ date("Y").'-XXXX' }}" required>
          @component('layouts.components.input_error', ['active' => $errors->has('no_umkm'), 'msg'=> $errors->first('no_umkm')])
          @endcomponent
        </div>
        <div class="form-group">
          <label for="nama_umkm" class="form-control-label">Nama UMKM<span class="text-danger">*</span></label>
          <input type="text" name="nama_umkm" class="form-control" value="{{ old('nama_umkm') ?? $umkm->nama_umkm ?? null }}" placeholder="Nama UMKM" required>
          @component('layouts.components.input_error', ['active' => $errors->has('nama_umkm'), 'msg'=> $errors->first('nama_umkm')])
          @endcomponent
        </div>
        <div class="form-group">
          <label for="nama_pemilik" class="form-control-label">Nama Pemilik<span class="text-danger">*</span></label>
          <input type="text" name="nama_pemilik" class="form-control" value="{{ old('nama_pemilik') ?? $umkm->nama_pemilik ??null }}" placeholder="Nama Pemilik" required>
          @component('layouts.components.input_error', ['active' => $errors->has('nama_pemilik'), 'msg'=> $errors->first('nama_pemilik')])
          @endcomponent
        </div>
        <div class="form-group">
          <label for="status" class="form-control-label">Status<span class="text-danger">*</span></label>
          <select name="status" class="form-control" required>
            <option value="1" {{ (old('status') ?? $umkm->status ?? null ) == '1' ? 'selected':'' }}>Aktif</option>
            <option value="0" {{ (old('status') ?? $umkm->status ?? null ) == '0' ? 'selected':'' }}>Tidak Aktif
            </option>
          </select>
          @component('layouts.components.input_error', ['active' => $errors->has('status'), 'msg'=> $errors->first('status')])
          @endcomponent
        </div>
        <div class="form-group">
          <label for="tipe_binaan" class="form-control-label">Tipe Binaan<span class="text-danger">*</span></label>
          <select name="tipe_binaan" class="form-control" required>
            <option value="A" {{ (old('tipe_binaan') ?? $umkm->tipe_binaan ?? null) === 'A' ? 'selected':'' }}>A
            </option>
            <option value="B" {{ (old('tipe_binaan') ?? $umkm->tipe_binaan ?? null) === 'B' ? 'selected':'' }}>B
            </option>
            <option value="C" {{ (old('tipe_binaan') ?? $umkm->tipe_binaan ?? null) === 'C' ? 'selected':'' }}>C
            </option>
          </select>
          @component('layouts.components.input_error', ['active' => $errors->has('tipe_binaan'), 'msg'=> $errors->first('tipe_binaan')])
          @endcomponent
        </div>
        <div class="form-group">
          <label for="pirt" class="form-control-label">P-IRT</label>
          <input type="text" name="pirt" class="form-control" value="{{ old('pirt') ?? $umkm->pirt ?? null }}" placeholder="Nomor P-IRT">
          @component('layouts.components.input_error', ['active' => $errors->has('pirt'), 'msg'=> $errors->first('pirt')])
          @endcomponent
        </div>
      </div>

      <div class="card-header">
        <h4 class="card-title text-center">Alamat UMKM</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="alamat" class="form-control-label">Alamat <span class="text-danger">*</span></label>
          <input type="text" name="alamat" class="form-control" value="{{ old('alamat') ?? $umkm->alamat ?? null }}" required>
          @component('layouts.components.input_error', ['active' => $errors->has('alamat'), 'msg'=> $errors->first('alamat')])
          @endcomponent
        </div>
        <div class="form-row">
          <label for="desa" class="form-control-label col">Desa <span class="text-danger">*</span>
            <input type="text" name="desa" class="form-control" value="{{ old('desa') ?? $umkm->desa ?? null }}" required>
            @component('layouts.components.input_error', ['active' => $errors->has('desa'), 'msg'=> $errors->first('desa')])
            @endcomponent
          </label>
          <label for="kecamatan" class="form-control-label col">Kecamatan <span class="text-danger">*</span>
            <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan') ?? $umkm->kecamatan ?? null }}" required>
            @component('layouts.components.input_error', ['active' => $errors->has('kecamatan'), 'msg'=> $errors->first('kecamatan')])
            @endcomponent
          </label>
          <label for="kota" class="form-control-label col">Kab/Kota <span class="text-danger">*</span>
            <input type="text" name="kota" class="form-control" value="{{ old('kota') ?? $umkm->kota ?? null }}" required>
            @component('layouts.components.input_error', ['active' => $errors->has('kota'), 'msg'=> $errors->first('kota')])
            @endcomponent
          </label>
        </div>
        <div class="form-group">
          <label for="google_map" class="form-control-label">Google Map</label>
          <input type="text" name="google_map" class="form-control" value="{{ old('google_map') ?? $umkm->google_map ?? null }}" placeholder="https://www.google.com/maps/place/Sepuluh+Nopember+Institute+of+Technology+(ITS)/@-7.2762443,112.7986227,15z/data=!4m5!3m4!1s0x2dd7fa1323221a93:0x306c3c99adedb258!8m2!3d-7.282356!4d112.7949253">
          @component('layouts.components.input_error', ['active' => $errors->has('google_map'), 'msg'=> $errors->first('google_map')])
          @endcomponent
        </div>
      </div>

      <div class="card-header">
        <h4 class="card-title text-center">Kontak dan Media Sosial UMKM</h4>
      </div>
      <div class="card-body">
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="no_wa">No Whatsapp<span class="text-danger">*</span></label>
            <input type="text" name="no_wa" class="form-control" value="{{ old('no_wa') ?? $umkm->no_wa ?? null }}" placeholder="085212345678">
            @component('layouts.components.input_error', ['active' => $errors->has('no_wa'), 'msg'=> $errors->first('no_wa')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') ?? $umkm->email ?? null }}" placeholder="example@email.com">
            @component('layouts.components.input_error', ['active' => $errors->has('email'), 'msg'=> $errors->first('email')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="instagram">Instagram</label>
            <input type="text" name="instagram" class="form-control" value="{{ old('instagram') ?? $umkm->instagram ?? null }}" placeholder="instagram_id">
            @component('layouts.components.input_error', ['active' => $errors->has('instagram'), 'msg'=> $errors->first('instagram')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="facebook">Facebook</label>
            <input type="text" name="facebook" class="form-control" value="{{ old('facebook') ?? $umkm->facebook ?? null }}" placeholder="https://www.facebook.com/InstitutTeknologiSepuluhNopember">
            @component('layouts.components.input_error', ['active' => $errors->has('facebook'), 'msg'=> $errors->first('facebook')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="tokopedia">Tokopedia</label>
            <input type="text" name="tokopedia" class="form-control" value="{{ old('tokopedia') ?? $umkm->tokopedia ?? null }}" placeholder="Tokopedia">
            @component('layouts.components.input_error', ['active' => $errors->has('tokopedia'), 'msg'=> $errors->first('tokopedia')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="shopee">Shopee</label>
            <input type="text" name="shopee" class="form-control" value="{{ old('shopee') ?? $umkm->shopee ?? null }}" placeholder="Shopee">
            @component('layouts.components.input_error', ['active' => $errors->has('shopee'), 'msg'=> $errors->first('shopee')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="bukalapak">Bukalapak</label>
            <input type="text" name="bukalapak" class="form-control" value="{{ old('bukalapak') ?? $umkm->bukalapak ?? null }}" placeholder="Bukalapak">
            @component('layouts.components.input_error', ['active' => $errors->has('bukalapak'), 'msg'=> $errors->first('bukalapak')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="produkdesa">Produk Desa</label>
            <input type="text" name="produkdesa" class="form-control" value="{{ old('produkdesa') ?? $umkm->produkdesa ?? null }}" placeholder="Link Produk Desa">
            @component('layouts.components.input_error', ['active' => $errors->has('produkdesa'), 'msg'=> $errors->first('produkdesa')])
            @endcomponent
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-control-label" for="website">Website</label>
            <input type="text" name="website" class="form-control" value="{{ old('website') ?? $umkm->website ?? null }}" placeholder="Website">
            @component('layouts.components.input_error', ['active' => $errors->has('website'), 'msg'=> $errors->first('website')])
            @endcomponent
          </div>
        </div>
      </div>

      <div class="card-header">
        <h4 class="card-title text-center">Detail Produk</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="nama_produk" class="form-control-label">Nama Produk<span class="text-danger">*</span></label>
          <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') ?? $umkm->nama_produk ?? null }}" required>
          @component('layouts.components.input_error', ['active' => $errors->has('nama_produk'), 'msg'=> $errors->first('nama_produk')])
          @endcomponent
        </div>
        <div class="form-group">
          <label for="bpom" class="form-control-label">BPOM</label>
          <input type="text" name="bpom" class="form-control" value="{{ old('bpom') ?? $umkm->bpom ?? null }}" placeholder="Izin BPOM">
          @component('layouts.components.input_error', ['active' => $errors->has('bpom'), 'msg'=> $errors->first('bpom')])
          @endcomponent
        </div>
        <div class="form-group">
          <label for="sertifikat_halal" class="form-control-label">Sertifikat Halal</label>
          <input type="text" name="sertifikat_halal" class="form-control" value="{{ old('sertifikat_halal') ?? $umkm->sertifikat_halal ?? null }}" placeholder="Sertifikat Halal">
          @component('layouts.components.input_error', ['active' => $errors->has('sertifikat_halal'), 'msg'=> $errors->first('sertifikat_halal')])
          @endcomponent
        </div>
        @if(!empty($umkm->image ?? null))
        <div class="row justify-content-center">
          <img class="img-responsive" src="{{ asset('storage/products/' . $umkm->image) }}" style="max-height: 300px" alt="{{ $umkm->nama_umkm.'-'.$umkm->nama_produk}}">
        </div>
        @endif
        <div class="form-group">
          <label for="image" class="form-control-label">Foto</label>
          <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" accept="image/png,image/jpeg,image/jpg">
            <label class="custom-file-label form-control" for="image">Foto</label>
          </div>
          @component('layouts.components.input_error', ['active' => $errors->has('image'), 'msg'=> $errors->first('image')])
          @endcomponent
          <script>
            document.querySelector('.custom-file-input[name="image"]').addEventListener('change', function(e) {
              e.target.nextElementSibling.innerText = e.target.files[0].name;
            })
          </script>
        </div>
        <div class="form-group">
          <label for="video" class="form-control-label">Video</label>
          <input type="text" name="video" class="form-control" value="{{ old('video') ?? $umkm->video ?? null }}" placeholder="Link video">
          @component('layouts.components.input_error', ['active' => $errors->has('video'), 'msg'=> $errors->first('video')])
          @endcomponent
        </div>
      </div>

      <div class="card-body">
        <div class="form-group">
          <button class="btn btn-primary btn-xl">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>