@extends('layouts.admin')

@section('title')
  <title>Tambah UMKM</title>
@endsection

@section('content')
  <main class="main">
    <div class="container mt-5">
      <div class="animated fadeIn">
        <form action="{{ route('binaan.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          @component('halal.binaan.components.umkm_form', ['errors' => $errors, 'umkm' => $umkm ?? []])
          @endcomponent
        </form>
      </div>
    </div>
  </main>
@endsection