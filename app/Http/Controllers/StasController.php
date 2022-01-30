<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StasController extends Controller
{
    public function stas(Request $request)
    {
        return view('stas', ['data' => $request->nomer]);
    }
}
