<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $posts = Post::orderBy('id', 'desc')->paginate(12);
    // dd($posts);
    return view('index',compact('posts'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    $request->validate([
      'title' => 'required',
      'category' => 'required',
      'content' => 'required',
      'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time() . '.' . $request->file->extension();
    // $request->image->move(public_path('images'), $imageName);
    $request->file->storeAs('public/images', $imageName);

    $postData = ['title' => $request->title, 'category' => $request->category, 'content' => $request->content, 'image' => $imageName];

    Post::create($postData);
    return redirect('/post')->with(['message' => 'Foto berhasil diunggah', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function show(Post $post) {
    return view('show', ['post' => $post]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function edit(Post $post) {
    return view('edit', ['post' => $post]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Post $post) {
    $imageName = '';
    if ($request->hasFile('file')) {
      $imageName = time() . '.' . $request->file->extension();
      $request->file->storeAs('public/images', $imageName);
      if ($post->image) {
        Storage::delete('public/images/' . $post->image);
      }
    } else {
      $imageName = $post->image;
    }

    $postData = ['title' => $request->title, 'category' => $request->category, 'content' => $request->content, 'image' => $imageName];

    $post->update($postData);
    return redirect('/post')->with(['message' => 'Foto berhasil diupdate', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function destroy(Post $post) {
    Storage::delete('public/images/' . $post->image);
    $post->delete();
    return redirect()->route('post.index')->with(['message' => 'Foto berhasil dihapus!', 'status' => 'info']);
  }
}