<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IntegratorController extends BaseController
{
    public function sendRequest(Request $request){
        echo print_r($request);die;
    }
    use AuthorizesRequests, ValidatesRequests;
}
