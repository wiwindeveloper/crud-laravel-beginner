@extends('layout/main')

@section('title', 'Autofill || Win Developer')


@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Form Autofill</h1>
      <form class="form-horizontal" role="form" method="post" action="autodata" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="NRP" id="nrp_code_id"
                 autocomplete="off" name="nrp" value="{{ old('nrp') }}">
                <span class="input-group-text" id="get-data-id">Cari</span>
                <div id="autocompleteresultlist" style="..."></div>
            </div>
            <div id="autocompleteresultlist" style="..."></div>
            @error('nrp')
              <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama mahasiswa" 
            name="nama" value="{{ old('nama') }}">
            @error('nama')
              <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email mahasiswa" 
            name="email" value="{{ old('email') }}">
            @error('email')
              <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" 
            name="jurusan" value="{{ old('jurusan') }}">
            @error('jurusan')
              <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>
</div>
@endsection