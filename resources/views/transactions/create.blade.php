@extends('layouts.master')

@section('title', 'Buat Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Buat Transaksi Baru</h2>
            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <input type="text" name="kategori" class="form-control" maxlength="50" oninput="this.value = this.value.toUpperCase();" required>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal:</label>
                    <input type="number" name="nominal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan Akun:</label>
                    <select name="tujuan" class="form-control" required>
                        @foreach($accounts as $account)
                            <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="account_id">ID Akun:</label>
                    <select name="account_id" class="form-control" required>
                        @foreach($accounts as $account)
                            <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Buat</button>
                <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
