<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post::with('user','category')->get();

        return view('admin.posts.all', compact('posts'));
    }

    public function edit($id)
    {
        $post = $this->post::find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request['approved'] = $request->has('approved');

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->storeAs('public/images/', $filename);
        }

        $this->post->find($id)->Update($request->all()+ ['image_path'=>$filename ?? $this->post->find($id)->image_path]);

        return redirect(route('posts.index'))->with('success', 'تم تعديل المنشور بنجاح');
    }

    public function destroy($id)
    {
        $post = $this->post::find($id);

        if ($post->image_path != 'Al-Riba.png')
            Storage::delete('/public/posts-images/'.$post->image_path);
        
        $post->delete();

        return back()->with('success', 'تم حذف المنشور بنجاح');
    }
}
