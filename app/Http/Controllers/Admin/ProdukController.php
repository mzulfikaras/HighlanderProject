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
            'code' => 'required|unique:products',
            'nama' => 'required|min:4|max:50',
            'image' => 'image|image|max:3000',
            'merk_id' => 'required',
            'harga' => 'required|min:5|max:20',
            'standbypower' => 'required|min:2|max:15',
            'primepower' => 'required|min:2|max:10',
            'enginemodel' => 'required|min:2|max:30',
            'fuelcosumption' => 'required|min:4|max:20',
            'cylinder' => 'required|min:2|max:15',
            'enginedata' => 'required|min:4|max:40',
            'size' => 'required|max:20'

        ]);
        // $validateData = $request->all();
        $validateData['gambar'] = $request->file('gambar')->store('assets/admin/produk','public');

        Product::create($validateData);
        $request->session()->flash('pesan' , "Product {$validateData['nama']} Berhasil Ditambahkan");
        return redirect()->route('produks.index');
    }

    public function edit(Product $produk){
        $merk = Merk::all();
        return view('admin.pages.produk.edit' , compact('produk','merk'));
    }

    public function update(Request $request, Product $produk){
        $produkId = $produk->find($produk->id);

        $validateData = $request->validate([
            'code' => 'required|unique:products,code,'.$produk->id,
            'nama' => 'required|min:4|max:50',
            'image' => 'image|image|max:3000',
            'merk_id' => 'required',
            'harga' => 'required|min:5|max:20',
            'standbypower' => 'required|min:2|max:15',
            'primepower' => 'required|min:2|max:10',
            'enginemodel' => 'required|min:2|max:30',
            'fuelcosumption' => 'required|min:4|max:20',
            'cylinder' => 'required|min:2|max:15',
            'enginedata' => 'required|min:4|max:40',
            'size' => 'required|max:20'
        ]);

        if($request->gambar){
            Storage::delete('public/'.$produkId->gambar);
            $validateData['gambar'] = $request->file('gambar')->store('assets/admin/produk','public');
        }
        $produk->update($validateData);

        return redirect()->route('produks.index', ['produk'=>$produk->id])->with('pesan' , "Perubahan Product Berhasil");
    }

    public function destroy(Product $produk){
        $produkId = $produk->find($produk->id);
        Storage::delete('public/'.$produkId->gambar);

        $produk->delete();
        return redirect()->route('produks.index')->with('hapus', "Hapus Data $produk->nama Berhasil");
    }
}
