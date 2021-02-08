<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::all();
        return view('admin.pages.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = ContactUs::all();
        return view('admin.pages.contact.create',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'telepon'=>'required',
            'pesan'=>'required'
        ]);
        ContactUs::create($validatedData);
        $request->session()->flash('pesan',"data {$validatedData['nama']} Berhasil Disimpan");
        return redirect()->route('contact.index');
    }

    public function destroy(ContactUs $contacts)
    {
        $contacts->delete();
        return redirect()->route('contact.index')->with('hapus', "Hapus Data Contact Berhasil");
    }
}
