<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $per_page = 8;
    public function load()
    {
        $this->per_page += 4;
    }

    public function render()
    {
        return view('livewire.post-component', [
            'posts_page' => Post::where('type', 2)->with('user:id,name,profile_photo_path')->approved()->paginate($this->per_page),
            'title' => "جميع المنشورات",
        ])->extends('layouts/index');
    }
}
