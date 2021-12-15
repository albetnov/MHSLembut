<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\PublicContact;
use App\Models\TeamLists;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home', [
            'products' => Products::limit(5)->get()
        ]);
    }

    public function about()
    {
        return view('about', [
            'teams' => TeamLists::get()
        ]);
    }

    public function shop()
    {
        return view('shop', [
            'products' => Products::paginate(3)
        ]);
    }

    public function shop_search(Request $request)
    {
        return view('shop', [
            'products' => Products::where('product_name', 'LIKE', "%{$request->search}%")->orWhere('product_desc', 'LIKE', "%{$request->search}%")->get(),
            'is_search' => true
        ]);
    }

    public function shop_detail(Products $product)
    {
        return view('shop_detail', [
            'product' => $product
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function send_contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:120|min:3',
            'email' => 'required|email',
            'subject' => 'required|max:225',
            'message' => 'required'
        ]);
        PublicContact::create($data);
        $notif = [
            'pesan' => 'Pesan berhasil dikirm.',
            'tipe' => 'success'
        ];
        return redirect()->back()->with($notif);
    }
}
