<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ {
    Post,
    User,
    Category,
    Comment
};

class DashController extends Controller
{
    public function index()
    {
        return view('admin.index')
            ->with('projects_count', Post::where('type', '=', 2)->count())
            ->with('news_count', Post::where('type', '=', 3)->count())
            ->with('posts_count', Post::where('type', '=', 1)->count())
            ->with('users_count', User::count())
            ->with('comments_count', Comment::count())
            ->with('categories_count', Category::count());
    }
}
