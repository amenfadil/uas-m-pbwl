@extends('layouts.master')

@section('title', 'Edit Akun')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #007bff; margin-bottom: 20px;">Edit Akun</h2>
            <form action="{{ route('accounts.update', $account->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id" style="color: #343a40;">ID Akun:</label>
                    <input type="text" name="id" class="form-control" value="{{ $account->id }}" maxlength="16" readonly required style="background-color: #343a40; color: white;">
                </div>
                <div class="form-group">
                    <label for="nama" style="color: #343a40;">Nama:</label>
                    <input type="text" name="nama" class="form-control" value="{{ $account->nama }}" required style="background-color: #343a40; color: white;">
                </div>
                <div class="form-group">
                    <label for="jenis" style="color: #343a40;">Jenis:</label>
                    <input type="text" name="jenis" class="form-control" value="{{ $account->jenis }}" required style="background-color: #343a40; color: white;">
                </div>
                <button type="submit" class="btn btn-success" style="background-color: #28a745; border: none;">Update</button>
                <a href="{{ route('accounts.index') }}" class="btn btn-secondary" style="background-color: #6c757d; border: none;">Batal</a>
            </form>
        </div>
    </div>
@endsection
