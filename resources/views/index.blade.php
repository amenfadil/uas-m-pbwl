@extends('layouts.master')
 
@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Akun</h5>
                    <p class="card-text h2">{{ $jumlahAccount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Transaksi</h5>
                    <p class="card-text h2">{{ $jumlahTransaksi }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card bg-dark text-white">
                <div class="card-header bg-warning text-white">
                    <h5 class="card-title">Daftar Transaksi</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Nominal</th>
                                <th>Tujuan</th>
                                <th>ID Akun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->kategori }}</td>
                                    <td>{{ $transaction->nominal }}</td>
                                    <td>{{ $transaction->tujuan }}</td>
                                    <td>{{ $transaction->account_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
            <div class="card bg-dark text-white">
                <div class="card-header bg-info text-white">
                    <h5 class="card-title">Daftar Akun</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr>
                                    <td>{{ $account->id }}</td>
                                    <td>{{ $account->nama }}</td>
                                    <td>{{ $account->jenis }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <a href="{{ route('transactions.index') }}" class="btn btn-info mx-2">Buat Transaksi</a>
            <a href="{{ route('accounts.index') }}" class="btn btn-success mx-2">Buat Akun</a>
        </div>
    </div>
@endsection
