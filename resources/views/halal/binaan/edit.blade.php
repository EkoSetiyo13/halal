@extends('layouts.admin')

@section('title')
  <title>Edit UMKM</title>
@endsection

@section('content')
  <main class="main">
    <ol class="breadcrumb">
      {{-- <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item active">Product</li> --}}
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <form action="{{ route('binaan.update', $umkm->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          @component('halal.binaan.components.umkm_form', ['errors' => $errors, 'umkm' => $umkm ?? []])
          @endcomponent
        </form>
      </div>
    </div>
  </main>
@endsection