<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MouImport;
use App\Mou;

class MoUController extends Controller
{
    public function index()
    {
        $mou = Mou::where('deleted_at', NULL)->paginate(10);
        return view('mou.index',compact('mou'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        Excel::import(new MouImport, $file); //IMPORT FILE
        session()->flash('status', 'Data MouBerhasil Diimport!');
        return redirect()->back();
    }
}
