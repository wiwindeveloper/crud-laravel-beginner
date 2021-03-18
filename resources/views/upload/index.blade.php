@extends('layout.main')

@section('title', 'Form Upload Gambar | Win Developer')


@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-3">Form Upload Gambar</h1>
      @if(session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
          </div>
      @endif
        
      <form action="/upload" method="post" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Pilih file</label>
            <input class="form-control" type="file" id="image" name="image">
            @error('image')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12 mb-2">
            <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                alt="preview image" style="max-height: 250px;">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
      </form>
    </div>
  </div>
</div>
@endsection