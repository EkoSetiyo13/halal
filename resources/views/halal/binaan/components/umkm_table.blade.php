<table class="table table-flush" id="datatable-basic">
    <thead class="thead-light">
        <tr>
            <th>Nomer Binaan</th>
            <th scope="col">Nama UKM</th>
            {{-- <th scope="col">Nama Produk</th> --}}
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th></th>
            <th scope="col"></th>
            {{-- <th scope="col"></th> --}}
            <th></th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        @forelse ($umkms as $umkm)
            <tr>
                <td>
                    <strong>{{ $umkm->no_umkm }}</strong><br>
                </td>
                <td>{{ $umkm->nama_umkm }}</td>
                {{-- <td>{{ $umkm->nama_produk }}</td> --}}
                <td>{!! $umkm->status_label !!}</td>
                <td>
                    <form action="{{ route('binaan.destroy', $umkm->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('binaan.edit', $umkm->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                        {{-- @if (Auth::user()->is_admin == 1)
              <a href="https://api.whatsapp.com/send?phone=62{{ substr($umkm->no_wa, 1) }}&text=Assalamualaikum," class="btn btn-success btn-sm">Chat Wa</a>
          @else

          @endif --}}
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
        @endforelse
    </tbody>
</table>
