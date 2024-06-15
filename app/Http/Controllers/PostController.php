<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Helpers\Slug;
use App\Traits\ImageUploadTrait;

class PostController extends Controller
{
    use ImageUploadTrait;

    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->middleware('verified')->only('create');
    }

    public function index()
    {
        $posts = $this->post::with('user:id,name,profile_photo_path')->approved()->paginate(10);
        $title = "جميع المنشورات";
        return view('main', compact('posts', 'title'));
    }

    public function index_blog()
    {
        $posts = $this->post::with('user:id,name,profile_photo_path')->approved()->paginate(3);
        $title = "جميع المنشورات";
        return view('index', compact('posts', 'title'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function create_by_type($id)
    {
        $post_type = $id;
        return view('posts.create', compact('post_type'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'type' => 'required',
        ]);

        // if($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $filename = time() . $file->getClientOriginalName();
        //     $file->storeAs('public/images/',$filename);
        // }
        
        $request->user()->posts()->create($request->all() + ['image_path' => $this->uploadImage($request->image) ?? 'default.jpg']);

        return back()->with('success', 'تم إضافة المنشور بنجاح، سيظهر بعد أن يوافق عليه المسؤول');
    }

    public function show($slug)
    {
        $post = $this->post::where('slug', $slug)->first();
        $posts = $this->post::with('user:id,name,profile_photo_path')->approved()->paginate(7);
        $comments = $post->comments->sortByDesc('created_at');

        return view('article', compact('post', 'posts', 'comments'));
    }

    public function edit($id)
    {
        $post = $this->post::find($id);
        
        abort_unless(auth()->user()->can('edit-post', $post), 403);
        
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $slug)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'type' => 'required',
        ]);

        $data['slug'] = Slug::uniqueSlug($request->title,'posts');
        $data['category_id'] = $request->category_id;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->storeAs('public/images/', $filename);
        }

        $request->user()->posts()->where('slug', $slug)->update($data + ['image_path'=> $filename ?? 'default.jpg']);

        return redirect(route('post.show', $data['slug']))->with('success', 'تم تعديل المنشور بنجاح');
    }

    public function destroy($id)
    {
        $post = $this->post::find($id);

        $post->delete();

        return back()->with('success', 'تم حذف المنشور بنجاح');
    }

    public function search(Request $request)
    {
        $posts = $this->post->where('body','LIKE','%'.$request->keyword.'%')->with('user')->approved()->paginate(10);
        $title = "نتائج البحث عن: ".$request->keyword;
        return view('index', compact('posts', 'title'));
    }

    public function getByCategory($id)
    {
        $posts = $this->post::with('user')->whereCategory_id($id)->approved()->paginate(10);
        $title = "المنشورات العائدة لتصنيف: ".Category::find($id)->title;
        return view('index',compact('posts', 'title'));
    }
}
