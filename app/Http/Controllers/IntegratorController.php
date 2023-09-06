<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integrator;
use App\Models\IntegrationOperator;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IntegratorController extends BaseController
{
    public function sendRequest(Request $request){
      
        
        if(isset($request->data['service'])){
            $service = $request->data['service'];
            $operator = new IntegrationOperator();
            $component =  $operator->revealComponent($service);
            $component->request('updates');
        }
      
    }

    public function post(Request $request){
    
    }
    public function get(Request $request){
    
    }
    use AuthorizesRequests, ValidatesRequests;
}
