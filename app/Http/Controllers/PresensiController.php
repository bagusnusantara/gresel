<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function index()
    {
        $str = "QR Code: http://en.m.wikipedia.org";
        
    }
    public function search(Request $request)
    {
        $qr_code = substr($request->qr_code,9);
        dd($qr_code);
    }
}
