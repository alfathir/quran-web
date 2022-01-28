<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DaftarTafsir extends Controller
{
    public function list()
    {
        $dataA = Http::get('https://equran.id/api/surat')->collect();
        $datas = $dataA->split(38);
        return view('page.list-tafsir', compact('datas'));
    }

    public function detail($id)
    {
        $data = Http::get("https://equran.id/api/tafsir/$id")->collect();
        $data = $data->all();
        return view('page.baca-tafsir', compact('data'));
    }
}
