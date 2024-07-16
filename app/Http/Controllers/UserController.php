<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getPostsByUser($id)
    {
        $contents = $this->user::with('posts')->find($id);

        return view('user.profile', compact('contents'));
    }

    public function getCommentsByUser($id)
    {
        $contents = $this->user::with('comments')->find($id);
        
        return view('user.profile',compact('contents'));
    }

    public function index()
    {
        return view('admin.users.index', ['users' => $this->user::with('role')->get()]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $password = Hash::make($request->password);
        $role = $request->role_id;
    
        $user = $this->user;
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->role_id = $role;
    
        $user->save();
    
        return back()->with('success', 'تم إضافة المستخدم بنجاح');
    }

    public function edit($id)
    {
        $user = $this->user::find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = $this->user->find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;

        $user->save();

        return redirect(route('user.index'))->with('success', 'تم تعديل معلومات المستخدم بنجاح');
    }

    public function destroy($id)
    {
        $this->user->find($id)->delete();

        return back()->with('success', "تم حذف المستخدم بنجاح");
    }
}
