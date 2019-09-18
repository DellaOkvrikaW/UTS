<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use App\Mobil;

class PinjamController extends Controller
{
    public function hitung(Request $request, $id){
        $nota = new Pinjam();

        $nota->nama_peminjam = $request->nama_peminjam;
        $nota->jumlah_hari = $request->jumlah_hari;

        $jumlah_hari = $request->jumlah_hari;
        $mobil = Mobil::find($id);
        $total_pinjam = $mobil->harga_pinjam * $jumlah_hari;

        $nota->total_pinjam = $total_pinjam;
        $nota->save();

        return "Total Bayar Sewa : Rp." . ($total_pinjam);
    }
}
