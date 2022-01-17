<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function inVoice(Request $request)
    {
        $amount = $request->payment1;

        return view('charge', [
            'amount' => $amount,
        ]);
    }
}
