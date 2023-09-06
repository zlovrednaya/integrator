<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integrator;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IntegratorController extends BaseController
{
    public function sendRequest(Request $request){
        Integrator::request($request);
    }

    public function post(Request $request){
    
    }
    public function get(Request $request){
    
    }
    use AuthorizesRequests, ValidatesRequests;
}
