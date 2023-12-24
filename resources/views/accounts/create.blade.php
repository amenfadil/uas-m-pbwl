@extends('layouts.master')

@section('title', 'Buat Akun')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #28a745; margin-bottom: 20px;">Buat Akun Baru</h2>
            <form action="{{ route('accounts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id" style="color: #343a40;">ID Akun:</label>
                    <input type="text" name="id" class="form-control" maxlength="16" oninput="this.value = this.value.toUpperCase();" style="background-color: #343a40; color: white;" required>
                </div>
                <div class="form-group">
                    <label for="nama" style="color: #343a40;">Nama:</label>
                    <input type="text" name="nama" class="form-control" maxlength="255" oninput="this.value = this.value.toUpperCase();" style="background-color: #343a40; color: white;" required>
                </div>
                <div class="form-group">
                    <label style="color: #343a40;">Jenis:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis" id="bisnis" value="BISNIS" style="background-color: #343a40; color: white;" required>
                        <label class="form-check-label" for="bisnis" style="color: #343a40;">BISNIS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis" id="personal" value="PERSONAL" style="background-color: #343a40; color: white;" required>
                        <label class="form-check-label" for="personal" style="color: #343a40;">PERSONAL</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="background-color: #28a745; border: none;">Create</button>
                <a href="{{ route('accounts.index') }}" class="btn btn-secondary" style="background-color: #6c757d; border: none;">Cancel</a>
            </form>
        </div>
    </div>
@endsection
