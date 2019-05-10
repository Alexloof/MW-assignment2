<?php
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::find($id);
        $product->stores = $product->stores;
        $product->reviews = $product->reviews;
        return response()->json($product);
    }

    public function create(Request $request)
    {
        $stores = $request->input("stores");

        $product = new Product;
        $product->title = $request->input("title");
        $product->brand = $request->input("brand");
        $product->price = $request->input("price");
        $product->image = $request->input("image");
        $product->description = $request->input("description");
        $product->save();

        foreach ($stores as $store) {
            echo $store;
            echo $product;
        }
        return response()->json($product);
    }
}
