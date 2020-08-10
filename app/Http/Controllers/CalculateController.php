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
        
        if($req->input('p') > 0 && $req->input('d') > 0 && $req->input('sigma') > 0 && $req->input('fi')) {
            $data['result'] = 10;
            $result = ($data['p'] * $data['d']) / (2 * $data['sigma'] * $data['fi'] - $data['p']);
            $data['result'] = $result;
        }

        return view('calculate', $data);
    }
}
