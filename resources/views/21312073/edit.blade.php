@extends('layout.master')

@section('judul')
    Edit 
@endsection

@section('content')
<form method="post" action="/21312073/{{ $uas->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>NPM</label>
        <input type="number" name="npm" value="" class="form-control">
    </div>
    @error('npm')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" value="" class="form-control">
    </div>
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection