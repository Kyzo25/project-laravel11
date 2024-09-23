<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;


class LandingController extends Controller
{
        public function index(){
        $pemasukan = pemasukan::where('is_valid',1)->get();
        $pengeluaran = pengeluaran::get();

        return view('landing.index', ['pemasukan'=>$pemasukan, 'pengeluaran'=>$pengeluaran]);
        }

}