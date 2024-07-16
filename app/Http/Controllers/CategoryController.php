<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return view('admin.category', ['categories' => $this->category->all()]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $this->category->create($request->all() + ['slug'=>$request->title]);

        return back()->with('success', "تم إضافة التصنيف بنجاح");
    }

    public function destroy($id)
    {
        $this->category->find($id)->delete();

        return back()->with('success', "تم حذف التصنيف بنجاح");
    }
}
