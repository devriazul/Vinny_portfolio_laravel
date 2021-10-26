<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

        $title = "My Template";
        $meta = [
            "decription" => "Index Page",
            "keywords" => "",
            "author" => ""
        ];
        return view('client.index', ['title' => $title, 'meta' => $meta]);
    }
}
