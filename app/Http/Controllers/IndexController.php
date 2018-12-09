<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Toegoe;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('index')->with('products', $products);

        $toegoe = Toegoe::all();

        return view('index')->with('toegoe', $toegoe);
    }

    // public function index()
    // {
    //     $toegoe = Toegoe::all();

    //     return view('index')->with('toegoe', $products);
    // }
   
}
