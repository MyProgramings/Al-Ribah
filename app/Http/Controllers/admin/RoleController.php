<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function index()
    {
        $roles = $this->role::all();

        return view('admin.roles.all', compact('roles'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
        ]);

        $role = $this->role;

        $role->role = $request->name;

        $role->save();

        return back()->with('success', 'تم إضافة الدور بنجاح');
    }

    public function destroy($id)
    {
        $this->role->find($id)->delete();

        return back()->with('success', 'تم حذف الدور بنجاح');
    }

    public function getByRole(Request $data)
    {
        $permissions = $this->role::find($data->id)->permissions()->pluck('permission_id');

        return $permissions;
    }
}
