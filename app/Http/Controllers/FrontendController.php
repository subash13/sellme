<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('welcome')->with(['products' => $products]);
    }

    public function viewProduct($id)
    {$prouduct = Product::find($id);
        return view('home')->with(['product' => $prouduct]);
    }

    public function orderProduct(Request $request)
    {
        $order = Order::create([
            'quantity' => $request['quantity'],
            'product_id' => $request['product_id'],
            'user_id' => Auth::user()->id,
        ]);
        alert()->success('Order Success', 'Wait for mail from ourside');
        return redirect()->back();
    }
}
