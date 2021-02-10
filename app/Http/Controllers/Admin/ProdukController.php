<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merk;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index(){
        $produks = Product::all();
        return view('admin.pages.produk.index' , ['produks'=>$produks]);
    }

    public function show(Product $produk){
        return view('admin.pages.produk.show', compact('produk'));
    }

    public function create(){
        $merk = Merk::all();
        return view('admin.pages.produk.create', compact('merk'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'merk_id' => 'required',
            'enginetype' => '',
            'kva' => 'required',
            'geno' => 'required|min:2|max:10',
            'type' => 'required|min:2|max:30',
            'harga' => '',
            'kondisi' => 'required|min:4|max:20',
            'warna' => 'required|min:2|max:15',
        ]);

        if($request->gambar){
            $validateData['gambar'] = $request->file('gambar')->store('assets/admin/produk','public');
        }

        Product::create($validateData);
        $request->session()->flash('pesan' , "Product Berhasil Ditambahkan");
        return redirect()->route('produks.index');
    }

    public function edit(Product $produk){
        $merk = Merk::all();
        return view('admin.pages.produk.edit' , compact('produk','merk'));
    }

    public function update(Request $request, Product $produk){
        $produkId = $produk->find($produk->id);

        $validateData = $request->validate([
            'merk_id' => 'required',
            'enginetype' => '',
            'kva' => 'required',
            'geno' => 'required|min:2|max:10',
            'type' => 'required|min:2|max:30',
            'harga' => '',
            'kondisi' => 'required|min:4|max:20',
            'warna' => 'required|min:2|max:15',
        ]);

        if($request->gambar){
            Storage::delete('public/'.$produkId->gambar);
            $validateData['gambar'] = $request->file('gambar')->store('assets/admin/produk','public');
        }
        $produk->update($validateData);

        return redirect()->route('produks.index', ['produk'=>$produk->id])->with('pesan' , "Update Product Berhasil");
    }

    public function destroy(Product $produk){
        $produkId = $produk->find($produk->id);
        Storage::delete('public/'.$produkId->gambar);

        $produk->delete();
        return redirect()->route('produks.index')->with('hapus', "Hapus Data $produk->nama Berhasil");
    }
}
