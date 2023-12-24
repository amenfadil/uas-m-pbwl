@extends('layouts.master')

@section('title', 'Edit Akun')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Edit Akun</h2>
            <form action="{{ route('accounts.update', $account->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id">ID Akun:</label>
                    <input type="text" name="id" class="form-control" value="{{ $account->id }}" maxlength="16" readonly required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" value="{{ $account->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis:</label>
                    <input type="text" name="jenis" class="form-control" value="{{ $account->jenis }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('accounts.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
