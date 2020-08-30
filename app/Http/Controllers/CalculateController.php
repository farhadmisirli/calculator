<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{

    public function formula1(Request $req) {

        $data = [
            'p' => (!empty($req->input('p'))) ? $req->input('p') : "",
            'd' => (!empty($req->input('d'))) ? $req->input('d') : "",
            'sigma' => (!empty($req->input('sigma'))) ? $req->input('sigma') : "",
            'fi' => (!empty($req->input('fi'))) ? $req->input('fi') : "",
            'result' => 0
        ];
        
        if($req->input('p') > 0 && $req->input('d') > 0 && $req->input('sigma') > 0 && $req->input('fi')) {
            $result = ($data['p'] * $data['d']) / (2 * $data['sigma'] * $data['fi'] - $data['p']);
            $data['result'] = $result;
        }

        return view('formulas/formula1', $data);
    }


    public function formula2(Request $req) {
        
    }

    public function formula3(Request $req) {
        
    }

    public function formula4(Request $req) {
        
    }

    // Tutumun xarici sethinin sahesi
    public function formula5(Request $req) {
        $data = [
            'f_gov' => (!empty($req->input('f_gov'))) ? $req->input('f_gov') : "",
            'f_dib' => (!empty($req->input('f_dib'))) ? $req->input('f_dib') : "",
            'result' => 0
        ];
        
        if($req->input('f_gov') > 0 && $req->input('f_dib') > 0) {
            $result =  $data['f_gov'] + 2*$data['f_dib'];
            $data['result'] = $result;
        }

        return view('formulas/formula5', $data);
    }

    // Tutumun silindirik sethinin sahesi
    public function formula6(Request $req) {
        $data = [
            'pi' => (!empty($req->input('pi'))) ? $req->input('pi') : "",
            'd_xar' => (!empty($req->input('d_xar'))) ? $req->input('d_xar') : "",
            'l_gov' => (!empty($req->input('l_gov'))) ? $req->input('l_gov') : "",
            'result' => 0
        ];
        
        if($req->input('pi') > 0 && $req->input('d_xar') > 0 && $req->input('l_gov') > 0) {
            $result =  $data['pi'] * $data['d_xar'] * $data['l_gov'];
            $data['result'] = $result;
        }

        return view('formulas/formula6', $data);
    }

    // Silindirik hissenin xarici diametri
    public function formula7(Request $req) {
        $data = [
            'd_dax' => (!empty($req->input('d_dax'))) ? $req->input('d_dax') : "",
            's' => (!empty($req->input('s'))) ? $req->input('s') : "",
            'result' => 0
        ];
        
        if($req->input('d_dax') > 0 && $req->input('s') > 0) {
            $result =  $data['d_dax'] + 2*$data['s'];
            $data['result'] = $result;
        }

        return view('formulas/formula7', $data);
    }

    // Tutumun govdesinin hecmi
    public function formula10(Request $req) {
        $data = [
            'pi' => (!empty($req->input('pi'))) ? $req->input('pi') : "",
            'r' => (!empty($req->input('r'))) ? $req->input('r') : "",
            'l_gov' => (!empty($req->input('l_gov'))) ? $req->input('l_gov') : "",
            'result' => 0
        ];
        
        if($req->input('pi') > 0 && $req->input('r') > 0 && $req->input('l_gov') > 0) {
            $result =  $data['pi'] * $data['r'] * $data['r'] * $data['l_gov'];
            $data['result'] = $result;
        }

        return view('formulas/formula10', $data);
    }

    // Tutumun hecmi
    public function formula12(Request $req) {
        $data = [
            'v_gov' => (!empty($req->input('v_gov'))) ? $req->input('v_gov') : "",
            'v_dib' => (!empty($req->input('v_dib'))) ? $req->input('v_dib') : "",
            'result' => 0
        ];
        
        if($req->input('v_gov') > 0 && $req->input('v_dib') > 0) {
            $result =  $data['v_gov'] + 2*$data['v_dib'];
            $data['result'] = $result;
        }

        return view('formulas/formula12', $data);
    }

    // Tutumun faydali hecmi
    public function formula13(Request $req) {
        $data = [
            'v_tut' => (!empty($req->input('v_tut'))) ? $req->input('v_tut') : "",
            'result' => 0
        ];
        
        if($req->input('v_tut') > 0) {
            $result =  $data['v_tut']*0.85;
            $data['result'] = $result;
        }

        return view('formulas/formula13', $data);
    }



}
