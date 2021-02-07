<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merk;

class MerkController extends Controller
{
    public function index(){
        $datas = Merk::orderBy('created_at','DESC')->get();

        return view('admin.pages.merk.index', compact('datas'));
    }

    public function create(){
        return view('admin.pages.merk.create');
    }

    public function store(Request $request){

        $merk = $request->validate([
            'nama_merk' => 'required'
        ]);

        $data = Merk::create($merk);

        if ($data) {
            return redirect()->route('admin.merk.index');
        }

    }

    public function edit(Merk $merk){
        // $data = $merk->find($merk->id)->all();

        return view('admin.pages.merk.edit', compact('merk'));
    }

    public function update(Request $request, Merk $merk){
        $dataMerk = $request->validate([
            'nama_merk' => 'required'
        ]);

        $merk->update($dataMerk);

        if ($merk) {
            return redirect()->route('admin.merk.index');
        }
    }

    public function destroy(Merk $merk){

        $merk->delete();

        if ($merk) {
            return redirect()->route('admin.merk.index');
        }
    }
}
