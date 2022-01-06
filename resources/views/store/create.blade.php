@extends('layouts.main')

@section('container')

    <div class="container">
        <h1 class="my-7">Tambah Barang</h1>

        <form method="post" action="/barang">
            @csrf
            <div class="mb-3">
                <label for="namaBarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama_barang">
            </div>

            <div class="mb-3">
                <label for="deskripsiBarang" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="jumlahBarang" class="form-label">Jumlah</label>
                <input type="in" class="form-control" id="jumlah" name="jumlah">
            </div>

            <div class="mb-3">
                <label for="kategoriBarang" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="jumlah" name="kategori">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection