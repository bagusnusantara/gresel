<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rb_santri;

class UploadController extends Controller
{
    public function index()
    {
        $mitra = Mitra::where('deleted_at', NULL)->paginate(10);
        return view('mitra.index', compact('mitra'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        Excel::import(new MitraImport, $file); //IMPORT FILE
        session()->flash('status', 'Data Mitra Berhasil Diimport!');
        return redirect()->back();
    }
}
