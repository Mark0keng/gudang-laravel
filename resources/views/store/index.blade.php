@extends('layouts.main')

@section('container')

    <div class="container">
        <h1>Daftar Barang</h1>

        <a href="/barang/add" class="btn btn-success my-3">Tambah Barang</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            
            <tbody>

                @foreach ($barang as $brg)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $brg->nama_barang }}</td>
                        <td>{{ $brg->deskripsi }}</td>
                        <td>{{ $brg->jumlah }}</td>
                        <td>{{ $brg->kategori }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/barang/{{ $brg->id }}">Info</a>
                            <form action="/barang/{{ $brg->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm my-1" href="">Delete</button>
                            </form>
                            <a class="btn btn-warning btn-sm" href="barang/edit/{{ $brg->id }}">Edit</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection