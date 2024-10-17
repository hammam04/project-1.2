<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
public function loadContent($type)
{
    // Periksa tipe konten dan load data yang sesuai
    switch ($type) {
        case 'box':
            // Logika untuk konten "box"
            return view('invoices/box');  // Ganti dengan nama tampilan yang sesuai
        case 'list':
            // Logika untuk konten "list"
            return view('invoices/list');  // Ganti dengan nama tampilan yang sesuai
        default:
            return response()->json(['error' => 'Invalid type'], 400);
    }
}

}
