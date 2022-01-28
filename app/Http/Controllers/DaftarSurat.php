<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DaftarSurat extends Controller
{
    public function list()
    {
        $dataA = Http::get('https://equran.id/api/surat')->collect();
        $datas = $dataA->split(38);
        return view('page.list-surat', compact('datas'));
    }

    public function detail($id)
    {
        $data = Http::get("https://equran.id/api/surat/$id")->collect();
        $data = $data->all();
        return view('page.baca-surat', compact('data'));
    }
}
