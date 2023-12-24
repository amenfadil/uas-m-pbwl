@extends('layouts.master')

@section('title', 'Daftar Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: #6c757d; margin-bottom: 20px;">Daftar Transaksi</h2>
            <a href="{{ route('transactions.create') }}" class="btn btn-success mb-3">Buat Transaksi Baru</a>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Nominal</th>
                            <th>Tujuan</th>
                            <th>ID Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->kategori }}</td>
                                <td>Rp {{ number_format($transaction->nominal, 0, ',', '.') }}</td>
                                <td>{{ $transaction->tujuan }}</td>
                                <td>{{ $transaction->account_id }}</td>
                                <td>
                                    <!-- Tambahkan tombol aksi sesuai kebutuhan -->
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Data Transaksi tidak ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>
@endsection
