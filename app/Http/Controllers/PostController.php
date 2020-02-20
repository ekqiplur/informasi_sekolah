<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(10);
        return view('admin.post.index', compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'=>'required|min:3',
            'content'=>'required'
        ]);

        $photo = $request->photo;
        $new_photo = time().$photo->getClientOriginalName();

        Post::create([
            'judul'=> $request->judul,
            'content'=>$request->content,
            'photo'=>'uploads/post/'.$new_photo,
            'slug'=> Str::slug($request->judul)
        ]);

        $photo -> move('uploads/post/',$new_photo);
        return redirect()->back() -> with('success', 'Postingan anda berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorfail($id);
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'=>'required|min:3',
            'content'=>'required'
        ]);

        if ($request->has('photo')) {
            
            $photo = $request->photo;
            $new_photo = time().$photo->getClientOriginalName();
            $photo->move('uploads/post/', $new_photo);

            $post_data = [
                'judul'=>$request->judul,
                'content'=>$request->content,
                'photo'=>'uploads/post/'.$new_photo,
                'slug'=>Str::slug($request->judul)
            ];

        } else {
            $post_data = [
                'judul'=>$request->judul,
                'content'=>$request->content,
                'slug'=>Str::slug($request->judul)
            ];
        }

        Post::whereId($id)->update($post_data);
        return redirect()->route('post.index')->with('success', 'Postingan anda berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post berhasil dihapus (Silahkan cek trashed post)');
    }

    public function history_delete() {
        $post = Post::onlyTrashed()->paginate(10);
        return view('admin.post.hapus', compact('post'));
    }

    public function restore($id) {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();

        return redirect()->back()->with('success', 'Post berhasil direstore (Silahkan cek list post)');
    }

    public function kill($id) {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();

        return redirect()->back()->with('success', 'Post berhasil dihapus secara permanen');
    }
}
