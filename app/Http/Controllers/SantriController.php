<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class SantriController extends Controller
{
    public function index()
    {
        return view('santri.index');
    }
    public function getDatatable()
    {
        $query = "SELECT rb_santri.*,TIMESTAMPDIFF(YEAR , tanggallahir, NOW() ) AS usia,pac.nama as nama_pac
        from rb_santri
        JOIN pac ON pac.id=rb_santri.pac;";
        $data = DB::select($query);
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="rekap/edit/' . $row->id . '" class="edit btn btn-primary btn-sm">Edit</a>';
                $btn = $btn . '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Hapus</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
