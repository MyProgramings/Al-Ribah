<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use ImageUploadTrait;
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
        $post = $this->post::find($id);
        
        $request['approved'] = $request->has('approved');

        if($request->hasFile('image')) {
            if($post->image_path != 'Al-Riba.png'){
                Storage::delete('/public/posts-images/'.$post->image_path);
                $this->post->find($id)->update($request->all() + ['image_path' => $this->uploadImage($request->image) ?? 'default.jpg']);
            }
            else{
                $this->post->find($id)->update($request->all() + ['image_path' => $this->uploadImage($request->image) ?? 'default.jpg']);
            }
        }

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
