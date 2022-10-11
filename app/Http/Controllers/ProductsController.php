<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carousels = [
            [
                "url" => "https://source.unsplash.com/user/ka_idris/900x300",
                "width" => "900",
                "height" => "300"
            ],
            [
                "url" => "https://source.unsplash.com/user/rarchitecture_melbourne/900x300",
                "width" => "900",
                "height" => "300"
            ],
            [
                "url" => "https://source.unsplash.com/user/spacejoy/900x300",
                "width" => "900",
                "height" => "300"
            ],
            [
                "url" => "https://source.unsplash.com/user/lauradavidson/900x300",
                "width" => "900",
                "height" => "300"
            ]
        ];
        return view('products', compact('carousels'));
    }
}
