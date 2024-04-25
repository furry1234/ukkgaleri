@extends('layouts.app')
@section('title', 'Tambah Foto')
@section('heading', 'Unggah Foto')
@section('link_text', 'Kembali')
@section('link', '/post')



@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Unggah Foto</h3>
      </div>
      
      <div class="card-body p-4">
        <form action="/post" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="my-2">
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Isi judul foto" value="{{ old('title') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="category" id="category" class="form-control @error('category') is-invalid @enderror" placeholder="Kategori" value="{{ old('category') }}">
            @error('category')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="file" name="file" id="file" accept="image/*" class="form-control @error('file') is-invalid @enderror">
            @error('file')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <textarea name="content" id="content" rows="6" class="form-control @error('content') is-invalid @enderror" placeholder="Deskripsi foto">{{ old('content') }}</textarea>
            @error('content')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="submit" value="Unggah" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection