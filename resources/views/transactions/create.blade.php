@extends('layouts.master')
 
@section('title', 'Buat Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #28a745; margin-bottom: 20px;">Buat Transaksi Baru</h2>
            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text" style="background-color: #343a40; color: white; border: none; border-radius: 0.25rem 0 0 0.25rem;">K</span>
                        </span>
                        <input type="text" name="kategori" class="form-control" maxlength="50" oninput="this.value = this.value.toUpperCase();" style="background-color: #343a40; color: white;" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal:</label>
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text" style="background-color: #343a40; color: white; border: none; border-radius: 0.25rem 0 0 0.25rem;">Rp</span>
                        </span>
                        <input type="number" name="nominal" class="form-control" style="background-color: #343a40; color: white;" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan Akun:</label>
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text" style="background-color: #343a40; color: white; border: none; border-radius: 0.25rem 0 0 0.25rem;">ID</span>
                        </span>
                        <select name="tujuan" class="form-control" style="background-color: #343a40; color: white;" required>
                            @foreach($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="account_id">ID Akun:</label>
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text" style="background-color: #343a40; color: white; border: none; border-radius: 0.25rem 0 0 0.25rem;">ID</span>
                        </span>
                        <select name="account_id" class="form-control" style="background-color: #343a40; color: white;" required>
                            @foreach($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="background-color: #28a745; border: none;">Buat</button>
                <a href="{{ route('transactions.index') }}" class="btn btn-secondary" style="background-color: #6c757d; border: none;">Batal</a>
            </form>
        </div>
    </div>
@endsection
