@extends('layouts.master')

@section('title', 'Buat Akun')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Buat Akun Baru</h2>
            <form action="{{ route('accounts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id">ID Akun:</label>
                    <input type="text" name="id" class="form-control" maxlength="16" oninput="this.value = this.value.toUpperCase();" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" maxlength="255" oninput="this.value = this.value.toUpperCase();" required>
                </div>
                <div class="form-group">
                    <label>Jenis:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis" id="bisnis" value="BISNIS" required>
                        <label class="form-check-label" for="bisnis">BISNIS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis" id="personal" value="PERSONAL" required>
                        <label class="form-check-label" for="personal">PERSONAL</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('accounts.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
