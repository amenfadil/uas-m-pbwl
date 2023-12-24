<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transaction;

class AppController extends Controller
{
    public function index()
    {
        // Mengambil jumlah data account dan transaksi
        $jumlahAccount = Account::count();
        $jumlahTransaksi = Transaction::count();

        // Mengambil data akun
        $accounts = Account::all();

        // Mengambil data transaksi
        $transactions = Transaction::all();

        // Mengirimkan data ke tampilan
        return view('index', compact('jumlahAccount', 'jumlahTransaksi', 'accounts', 'transactions'));
    }
}
