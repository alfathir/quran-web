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

        $juz_surat = [
            "Al-Fatihah [1] - Al-Baqarah [141]",
            "Al-Baqarah [142] - Al-Baqarah [252]",
            "Al-Baqarah [253] - Ali 'Imran [92]",
            "Ali 'Imran [93] - An-Nisa' [23]",
            "An-Nisa' [24] - An-Nisa' [147]",
            "An-Nisa' [148] - Al-Ma'idah [81]",
            "Al-Ma'idah [82] - Al-An'am [110]",
            "Al-An'am [111] - Al-A'raf [87]",
            "Al-A'raf [88] - Al-Anfal [40]",
            "Al-Anfal [41] - At-Taubah [92]",
            "At-Taubah [93] - Hud [5]",
            "Hud [6] - Yusuf [52]",
            "Yusuf [53] - Ibrahim [52]",
            "Al-Hijr [1] - An-Nahl [128]",
            "Al-Isra' [1] - Al-Kahf [74]",
            "Al-Kahf [75] - Taha [135]",
            "Al-Anbiya' [1] - Al-Hajj [78]",
            "Al-Mu'minun [1] - Al-Furqan [20]",
            "Al-Furqan [21] - An-Naml [55]",
            "An-Naml [56] - Al-'Ankabut [45]",
            "Al-'Ankabut [46] - Al-Ahzab [30]",
            "Al-Ahzab [31] - Yasin [27]",
            "Yasin [28] - Az-Zumar [31]",
            "Az-Zumar [32] - Fussilat [46]",
            "Fussilat [47] - Al-Jasiyah [37]",
            "Al-Ahqaf [1] - Az-Zariyat [30]",
            "Az-Zariyat [31] - Al-Hadid [29]",
            "Al-Mujadalah [1] - At-Tahrim [12]",
            "Al-Mulk [1] - Al-Mursalat [50]",
            "An-Naba' [1] - An-Nas [6]",
        ];

        $juz_nama = [
            "Alif Lam Mim",
            "Sayaqulu",
            "Tilka Ar-Rosul",
            "Lan Tanalu",
            "Wa Al-Muhshonat",
            "La Yuhibbu Allah",
            "Wa Izha Sami'u",
            "Wa Lau Annana",
            "Qala Al-Malau",
            "Wa'lamuu",
            "Ya'tadhirun",
            "Wa Ma Min Daabbah",
            "Wa Ma Ubarriu",
            "Rubama",
            "Subhana Aladhi",
            "Qala Alam",
            "Iqtarabu",
            "Qad Aflaha",
            "Wa Qala Aladhina",
            "Amman Kholaq",
            "Utlu Ma Uhiya",
            "Wa Man Yaqnut",
            "Wa Ma Liya",
            "Faman Adzlamu",
            "Ilaihi Yurod",
            "Ha Mim",
            "Qala Fama",
            "Qad Sami'a Allah",
            "Tabaraka Aladhi",
            "'Amma"
        ];

        return view('page.list-surat', compact('datas', 'juz_surat', 'juz_nama'));
    }

    public function bacaSurat($id)
    {
        $data = Http::get("https://equran.id/api/surat/$id")->collect();
        $data = $data->all();
        return view('page.baca-surat', compact('data', 'id'));
    }

    public function bacaJuz($id)
    {
        $juz_surat = [
            "Al-Fatihah [1] - Al-Baqarah [141]",
            "Al-Baqarah [142] - Al-Baqarah [252]",
            "Al-Baqarah [253] - Ali 'Imran [92]",
            "Ali 'Imran [93] - An-Nisa' [23]",
            "An-Nisa' [24] - An-Nisa' [147]",
            "An-Nisa' [148] - Al-Ma'idah [81]",
            "Al-Ma'idah [82] - Al-An'am [110]",
            "Al-An'am [111] - Al-A'raf [87]",
            "Al-A'raf [88] - Al-Anfal [40]",
            "Al-Anfal [41] - At-Taubah [92]",
            "At-Taubah [93] - Hud [5]",
            "Hud [6] - Yusuf [52]",
            "Yusuf [53] - Ibrahim [52]",
            "Al-Hijr [1] - An-Nahl [128]",
            "Al-Isra' [1] - Al-Kahf [74]",
            "Al-Kahf [75] - Taha [135]",
            "Al-Anbiya' [1] - Al-Hajj [78]",
            "Al-Mu'minun [1] - Al-Furqan [20]",
            "Al-Furqan [21] - An-Naml [55]",
            "An-Naml [56] - Al-'Ankabut [45]",
            "Al-'Ankabut [46] - Al-Ahzab [30]",
            "Al-Ahzab [31] - Yasin [27]",
            "Yasin [28] - Az-Zumar [31]",
            "Az-Zumar [32] - Fussilat [46]",
            "Fussilat [47] - Al-Jasiyah [37]",
            "Al-Ahqaf [1] - Az-Zariyat [30]",
            "Az-Zariyat [31] - Al-Hadid [29]",
            "Al-Mujadalah [1] - At-Tahrim [12]",
            "Al-Mulk [1] - Al-Mursalat [50]",
            "An-Naba' [1] - An-Nas [6]",
        ];

        $juz_nama = [
            "Alif Lam Mim",
            "Sayaqulu",
            "Tilka Ar-Rosul",
            "Lan Tanalu",
            "Wa Al-Muhshonat",
            "La Yuhibbu Allah",
            "Wa Izha Sami'u",
            "Wa Lau Annana",
            "Qala Al-Malau",
            "Wa'lamuu",
            "Ya'tadhirun",
            "Wa Ma Min Daabbah",
            "Wa Ma Ubarriu",
            "Rubama",
            "Subhana Aladhi",
            "Qala Alam",
            "Iqtarabu",
            "Qad Aflaha",
            "Wa Qala Aladhina",
            "Amman Kholaq",
            "Utlu Ma Uhiya",
            "Wa Man Yaqnut",
            "Wa Ma Liya",
            "Faman Adzlamu",
            "Ilaihi Yurod",
            "Ha Mim",
            "Qala Fama",
            "Qad Sami'a Allah",
            "Tabaraka Aladhi",
            "'Amma"
        ];

        $data = Http::get("https://api.quran.sutanlab.id/juz/$id")->collect();
        $data = $data->all();
        return view('page.baca-juz', compact('data', 'id', 'juz_nama', 'juz_surat'));
    }
}
