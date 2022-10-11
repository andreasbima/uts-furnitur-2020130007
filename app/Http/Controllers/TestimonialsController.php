<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
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
                "url" => "https://source.unsplash.com/user/fotosushi/ExVlW9b648Q/500x300",
                "width" => "500",
                "height" => "300",
                "title" => "Joan Alex",
                "description" => "Great quality, Love it !"
            ],
            [
                "url" => "https://source.unsplash.com/user/fotosushi/ocOW8-uiAjk/500x300",
                "width" => "500",
                "height" => "300",
                "title" => "Miles Simon",
                "description" => "The Sofa, looks so good and comfortable"
            ],
            [
                "url" => "https://source.unsplash.com/user/fotosushi/jKuch64WZ_o/500x300",
                "width" => "500",
                "height" => "300",
                "title" => "Iris Lowe",
                "description" => "Very good quality, worth the price !"
            ]
        ];
        return view('testimonials', compact('carousels'));
    }
}
