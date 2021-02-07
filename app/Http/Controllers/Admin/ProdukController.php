<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all();
        return view('admin.layouts.pages.produk.index' , ['produks'=>$produks]);
    }

    public function show(Produk $produk){
        return view('admin.layouts.pages.produk.show' , );
    }

    public function create(){
        return view('admin.layouts.pages.produk.create',);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'code' => 'required|size:4|unique:produks',
            'nama' => 'required|min:4|max:50',
            'image' => 'image|image|max:3000',
            'merk' => 'required',
            'harga' => 'required|min:5|max:20',
            'standbypower' => 'required|min:2|max:15',
            'primepower' => 'required|min:2|max:10',
            'enginemodel' => 'required|min:2|max:30',
            'fuelcosumption' => 'required|min:4|max:20',
            'cylinder' => 'required|min:2|max:15',
            'enginedata' => 'required|min:4|max:40',
            'size' => 'required|min:4|max:20'
            
        ]);
        // $validateData = $request->all();
        $validateData['gambar'] = $request->file('gambar')->store('assets/img','public');

        Produk::create($validateData);
        $request->session()->flash('pesan' , "Produk {$validateData['nama']} Berhasil Ditambahkan");
        return redirect()->route('produks.index');
    }

    public function edit(Produk $produk){
        return view('main.admin.produk.edit' , compact('produk'));
    }

    public function update(Request $request, Produk $produk){
        $validateData = $request->validate([
            'code' => 'required|size:4|unique:produks'.$produk->id,
            'nama' => 'required|min:4|max:50',
            'image' => 'image|image|max:3000',
            'merk' => 'required',
            'harga' => 'required|min:5|max:20',
            'standbypower' => 'required|min:2|max:15',
            'primepower' => 'required|min:2|max:10',
            'enginemodel' => 'required|min:2|max:30',
            'fuelcosumption' => 'required|min:4|max:20',
            'cylinder' => 'required|min:2|max:15',
            'enginedata' => 'required|min:4|max:40',
            'size' => 'required|min:4|max:20'
        ]);
        if($request->gambar){
            Storage::delete('public/'.$produk->gambar);
            $validateData['gambar'] = $request->file('gambar')->store('/assets/img','public');
        }
        $produk->update($validateData);

        return redirect()->route('produks.index', ['produk'=>$produk->id])->with('pesan' , "Perubahan Produk Berhasil");
    }

    public function destroy(Produk $produk){
        $produk->delete();
        return redirect()->route('produks.index')->with('hapus', "Hapus Menu $produk->nama Berhasil");
    }
}
