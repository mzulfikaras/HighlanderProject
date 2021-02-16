<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\client;
use App\Models\ContactUs;
use App\Models\Merk;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function getHome(){
        $dataProduk = Product::orderby('created_at','DESC')->paginate(3);
        $dataClient = client::all();
        $dataAnnounce = Announcement::with([])->first();
        return view('user.pages.home.home', compact('dataProduk', 'dataClient','dataAnnounce'));
    }

    public function getProduct(){
        $merk = Merk::all();
        $dataProduk = Product::orderBy('created_at','DESC')->paginate(6);
        return view('user.pages.product.product',compact('dataProduk','merk'));
    }

    public function filterProduct(Request $request)
	{
        $merk = Merk::all();

		$cari = $request->merk;

        if ($cari == 0) {
            return redirect()->route('user.product');
        } else {
            $dataProduk = Product::where('merk_id','like',"%".$cari."%")->get();
        }

		return view('user.pages.product.product', compact('dataProduk','merk'));

	}

    public function getProductDetails(Product $produk){
        $similiarProduct = Product::where('merk_id', $produk->merk_id)->paginate(6);
        return view('user.pages.product.product-details', compact('produk', 'similiarProduct'));
    }

    public function getAbout(){
        return view('user.pages.about.index');
    }

    public function getClient(){
        $dataClient = client::orderBy('created_at','DESC')->get();
        return view('user.pages.client.index', compact('dataClient'));
    }

    public function getContact(){
        return view('user.pages.contact.index');
    }

    public function storeContact(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'telepon'=>'required',
            'pesan'=>'required'
        ]);
        ContactUs::create($validatedData);
        $request->session()->flash('pesan',"Pesan Anda Berhasil Dikirim");
        return redirect()->route('user.contact');
    }
}
