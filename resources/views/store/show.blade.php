@extends('layouts.main')

@section('container')

    <div class="container">
        <h1 class="my-7">Detail Barang</h1>

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $store->nama_barang }}</h3>
                <p><b> Deskripsi : </b> {{ $store->deskripsi }}</p>
                <p><b>Jumlah : </b> {{ $store->jumlah }}</p>
                <p> <b>Kategori : </b>{{ $store->kategori }}</p>
                <p><b>Dibuat pada : </b>{{ $store->created_at }}</p>
                <p><b>Perubahan terakhir : </b> {{ $store->updated_at }}</p>
            </div>
        </div>
    </div>   
@endsection