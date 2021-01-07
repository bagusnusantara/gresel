<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ReportController extends Controller
{
   public function reportDaftarMitra()
   {
       $query = "SELECT * FROM [ref].[kategori_mitra]";
       $data = DB::select($query);
    //    dd($data);
    //    $data = DB::table('ref.kategori_mitra')->get();
       $pdf = PDF::loadView('report.kategori_mitra', compact('data'))->setPaper('a5','landscape');
       return $pdf->download('report-kategori-mitra.pdf');
   }
}
