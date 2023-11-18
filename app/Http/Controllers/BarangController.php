<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data barang
    	$barang = Barang::all();
 
    	// mengirim data barang ke view barang
    	return view('barang', ['barang' => $barang]);
    }

    public function tambah()
    {
    	return view('barang_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'harga' => 'required',
            'stok' => 'required'
    	]);
 
        Barang::create([
    		'nama' => $request->nama,
    		'harga' => $request->harga,
            'stok' => $request->stok
    	]);
 
    	return redirect('/barang');
    }
    public function edit($id)
{
   $barang = barang::find($id);
   return view('barang_edit', ['barang' => $barang]);
}
 
public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required',
	   'harga' => 'required',
       'stok' => 'required'
    ]);
 
    $barang = Barang::find($id);
    $barang->nama = $request->nama;
    $barang->harga = $request->harga;
    $barang->stok = $request->stok;
    $barang->save();
    return redirect('/barang');
}
public function delete($id)
{
    $barang = Barang::find($id);
    $barang->delete();
    return redirect('/barang');
}
}