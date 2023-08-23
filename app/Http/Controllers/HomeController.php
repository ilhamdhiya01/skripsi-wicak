<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_masuk;
use App\Models\Transaksi_keluar;
use App\Models\Barang;
use App\Models\Supplier;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'inTransaction' => Transaksi_masuk::all(),
            'outTransaction' => Transaksi_keluar::all(),
            'totalBarang' => Barang::all(),
            'totalSupplier' => Supplier::all()
        ]);
    }
}
