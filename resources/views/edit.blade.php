@extends('layouts.app')
@section('title', 'Edit Foto')
@section('heading', 'Edit Foto')
@section('link_text', 'Batal')
@section('link', '/post')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit Post</h3>
      </div>
      <div class="card-body p-4">
        <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="my-2">
            <input type="text" name="title" id="title" class="form-control" placeholder="Isi judul foto" value="{{ $post->title }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="category" id="category" class="form-control" placeholder="Kategori" value="{{ $post->category }}" required>
          </div>

          <div class="my-2">
            <input type="file" name="file" id="file" accept="image/*" class="form-control">
          </div>

          <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid img-thumbnail" width="150">

          <div class="my-2">
            <textarea name="content" id="content" rows="6" class="form-control" placeholder="Deskripsi foto" required>{{ $post->content }}</textarea>
          </div>

          <div class="my-2">
            <input type="submit" value="Simpan" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection