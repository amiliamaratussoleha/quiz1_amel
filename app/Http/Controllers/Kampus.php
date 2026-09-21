<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kampus extends Controller
{
    //isi controller disini
    public function index()
    {
        $namaKampus = "Politeknik Negeri Malang PSDKU Pamekasan";

        $judul = "Selamat Datang di Kampusku";

        $narasi = "Halo teman-teman! Aku kuliah di Politeknik Negeri Malang Kampus Pamekasan, Madura. 
        Walau bukan kampus pusat, suasananya asri, tenang, dan kekeluargaannya dapet banget — 
        jadi belajar lebih fokus dan nyaman!";

        $tentangKampus = "POLINEMA PSDKU Pamekasan adalah Kampus cabang resmi POLINEMA di Madura yang bekerja sama dengan Pemkab Pamekasan. 
        disini Menyediakan prodi D3 Manajemen Informatika, D4 Akuntansi Manajemen, dan D4 Teknik Otomotif Elektronik.
        PASDKU Pamekasan Merupakan peningkatan status dari Program Diluar Domisili (PDD) yang dirintis sejak 2014.
        Kampus ini resmi disahkan menjadi PSDKU POLINEMA oleh Mendikbud pada April 2021.";

        $programStudi = [
            "Teknologi Informasi D-3 Manajemen Informatika",
            "Teknik Mesin D-4 Teknik Otomotif Elektronik",
            "Akuntansi D-4 Akuntansi Manajemen"
        ];

        return view('halaman.kampus', [
            'namaKampus' => $namaKampus,
            'judul' => $judul,
            'narasi' => $narasi,
            'tentangKampus' => $tentangKampus,
            'programStudi' => $programStudi
        ]);
    }
    
}
