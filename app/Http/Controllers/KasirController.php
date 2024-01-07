<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    //

    public function index(Request $request)
    {
        $produks = Product::when($request->query('search'), function ($q) use ($request) {
            return $q->where('name_product', 'like', '%' . $request->query('search') . '%');
        })->paginate(8);
        return view('pages.kasir.kasir', ['type_menu' => 'kasir', 'produks' => $produks]);
    }
}
