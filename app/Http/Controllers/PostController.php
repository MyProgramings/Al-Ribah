<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Helpers\Slug;
use App\Models\Partner;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use ImageUploadTrait;

    public $post;
    public $partner;

    public function __construct(Post $post, Partner $partner)
    {
        $this->post = $post;
        $this->partner = $partner;
        // $this->middleware('verified')->only('create', 'create_by_type');
    }

    public function index()
    {
        $posts = $this->post::with('user:id,name,profile_photo_path')->approved()->paginate(3);
        $title = "جميع المنشورات";
        return view('index', compact('posts', 'title'));
    }

    public function index_blog()
    {
        $posts = $this->post::where('type', 3)->with('user:id,name,profile_photo_path')->approved()->paginate(5);
        $posts_blog = $this->post::where('type', 1)->with('user:id,name,profile_photo_path')->approved()->paginate(10);
        $partners = $this->partner->all();
        $title = "جميع المنشورات";
        return view('main', compact('posts', 'posts_blog', 'partners', 'title'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function create_by_type($id)
    {
        $post_type = $id;

        abort_unless(auth()->user()->can('add-post', $this->post), 403);

        return view('posts.create', compact('post_type'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'type' => 'required',
        ]);
        
        $request->user()->posts()->create($request->all() + ['image_path' => $this->uploadImage($request->image) ?? 'default.jpg']);

        return back()->with('success', 'تم إضافة المنشور بنجاح، سيظهر بعد أن يوافق عليه المسؤول');
    }

    public function show($slug)
    {
        $post = $this->post::where('slug', $slug)->first();
        $posts = $this->post::where('type', 1)->whereNot('slug', $slug)->with('user:id,name,profile_photo_path')->approved()->paginate(4);
        if($post){
            $related_posts = $this->post::where('category_id', $post->category_id)->where('type', 1)->whereNot('slug', $slug)->with('user:id,name,profile_photo_path')->approved()->paginate(3);
            $comments = $post->comments->sortByDesc('created_at');
        }else{
            $related_posts = null;
            $comments = null;
        }

        return view('article', compact('post', 'posts', 'related_posts', 'comments'));
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

        $posts = Post::where('title', $request->title)->first();

        $data['slug'] = Slug::uniqueSlug($request->title,'posts');
        $data['category_id'] = $request->category_id;

        if($request->hasFile('image')) {
            if($posts->image_path != 'Al-Riba.webp'){
                Storage::delete('/public/posts-images/'.$posts->image_path);
                $request->user()->posts()->where('slug', $slug)->update($data + ['image_path' => $this->uploadImage($request->image) ?? 'default.jpg']);
            }
            else{
                $request->user()->posts()->where('slug', $slug)->update($data + ['image_path' => $this->uploadImage($request->image) ?? 'default.jpg']);
            }
        }

        return redirect(route('post.show', $data['slug']))->with('success', 'تم تعديل المنشور بنجاح');
    }

    public function destroy($id)
    {
        $post = $this->post::find($id);

        if ($post->image_path != 'Al-Riba.webp')
            Storage::delete('/public/posts-images/'.$post->image_path);
        
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
