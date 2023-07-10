<?php

namespace App\Http\Controllers;

use App\Models\Kreteria;
use App\Models\Alternatif;
use App\Http\Controllers\Controller;



class NormalisasiController extends Controller
{
    public function calculateSaw()
    {
        $alternatives = Alternatif::all();
        $weights = [0.125,0.25,0.25,0.25,0.125]; // Bobot kriteria

        // $minValues = $alternatives->min(); // Mendapatkan nilai minimum dari setiap kolom
        // $maxValues = $alternatives->max(); // Mendapatkan nilai maksimum dari setiap kolom

        $results = [];
        $nomor = 0;

        foreach ($alternatives as $alternative) {
            $harga = $alternative->harga;
            $kualitas = $alternative->kualitas;
            $berat = $alternative->berat;
            $popoler = $alternative->populer;
            $pj = $alternative->pj;
            // $keawetan = $alternative->keawetan;

            // Normalisasi setiap nilai kriteria
            $norm_harga = 450000/ $harga;
            $norm_kualitas =  $kualitas/90 ;
            $norm_berat = 3/$berat;
            $norm_popoler = $popoler / 90;
            $norm_pj = $pj/ 10;
            // $norm_keawetan = ($keawetan - $minValues->keawetan) / ($maxValues->keawetan - $minValues->keawetan);


            // Hitung hasil SAW
            // $hasil = ($weights[0] * $norm_harga)+ ($weights[1] * $norm_kualitas)  + ($weights[2] * $norm_berat)
            //     + ($weights[3] * $norm_popoler) + ($weights[4] * $norm_pj);

            $nomor++;

            $nama_alt = $alternative->nama;
            $des = $alternative->deskripsi;
            $results[] = ['nomor' => $nomor, 'nama_alt' => $nama_alt, 'harga' => $norm_harga,'kualitas' => $norm_kualitas,
            'berat' => $norm_berat, 'popoler' => $norm_popoler,'pj' => $norm_pj,'deskripsi' => $des];
            // arsort($results);
        }


        return view('normalisasi', ['results' => collect($results)->sortByDesc('hasil')->values()->all()]);
    }
}
