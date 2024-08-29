<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display the products dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::sortable()->paginate(5);
        return view('products',compact('products'));
    }


}