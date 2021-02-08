<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admin.pages.client.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.pages.client.create');
    }

    public function store(Request $request)
    {
        $dataClient = $request->validate([
            'nama_client' => 'required',
            'image' => 'required|file|image|max:4000',
            'description' => ''
        ]);
        $dataClient['image'] = $request->file('image')->store('assets/admin/client', 'public');
        $client = Client::create($dataClient);
        $request->session()->flash('pesan', "Client {$client['nama_client']} Berhasil diSimpan");
        return redirect()->route('client.index');
    }

    public function edit(Client $client)
    {
        return view('admin.pages.client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $clientId = $client->find($client->id);

        $dataClient = $request->validate([
            'nama_client' => 'required',
            'description' => '',
        ]);
        if($request->image){
            Storage::delete('public/'.$clientId->image);
            $dataClient['image'] = $request->file('image')->store('assets/admin/client', 'public');
        }
        $client->update($dataClient);
        return redirect()->route('client.index', ['client' => $client->id])->with('pesan', "Update client {$dataClient['nama_client']} Berhasil di Ubah");
    }

    public function destroy(Client $client)
    {
        $clientId = $client->find($client->id);
        Storage::delete('public/'.$clientId->image);
        $client->delete();
        return redirect()->route('client.index')->with('hapus', "Client $client->nama_client Berhasil di Hapus");
    }
}
