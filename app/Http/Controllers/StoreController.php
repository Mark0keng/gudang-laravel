<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $barang = DB::table('stores')->get();

        $barang = store::all();
        return view('store.index', [
            'barang' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new store;
        $barang->nama_barang  = $request->nama_barang;
        $barang->deskripsi  = $request->deskripsi;
        $barang->jumlah  = $request->jumlah;
        $barang->kategori  = $request->kategori;

        $barang->save();

        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(store $store)
    {
        return view('store.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(store $store )
    {
        return view('store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, store $store)
    {
        store::where('id', $store->id)
            ->update([
                'nama_barang' => $request->nama_barang,
                'deskripsi' => $request->deskripsi,
                'jumlah' => $request->jumlah,
                'kategori' => $request->kategori
            ]);
        
            return redirect('/barang')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(store $store)
    {
        store::destroy($store->id);
        return redirect('/barang')->with('status', 'Data berhasil dihapus!');
    }
}
