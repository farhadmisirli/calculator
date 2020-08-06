<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{

    public function index(Request $req) {

        $data = [
            'p' => (!empty($req->input('p'))) ? $req->input('p') : 0.00,
            'd' => (!empty($req->input('d'))) ? $req->input('d') : 0.00,
            'sigma' => (!empty($req->input('sigma'))) ? $req->input('sigma') : 0.00,
            'fi' => (!empty($req->input('fi'))) ? $req->input('fi') : 0.00,
            'result' => 0
        ];

        


        return view('calculate', $data);
    }
}
