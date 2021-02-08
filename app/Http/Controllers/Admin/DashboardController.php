<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\client;
use App\Models\ContactUs;
use App\Models\Merk;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $produk = Product::all();
        $client = client::all();
        $merk = Merk::all();
        $contact = ContactUs::all();
        return view('admin.pages.Dashboard.index', compact('produk','client','merk','contact'));
    }
}
