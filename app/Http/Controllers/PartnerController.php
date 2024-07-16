<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    public $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function index()
    {
        return view('admin.partner', ['partners' => $this->partner->all()]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() .'.'. $file->getClientOriginalExtension();
            $file->storeAs('public/companies/',$filename);
        }
        $this->partner->create(['image' => $filename]);
        return back()->with('success', "تم إضافة الشريك بنجاح");
    }

    public function destroy($id)
    {
        $partner = $this->partner::find($id);

        Storage::delete('/public/companies/'.$partner->image);

        $partner->delete();

        return back()->with('success', 'تم حذف الشريك بنجاح');
    }
}
