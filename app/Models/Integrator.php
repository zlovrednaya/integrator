<?php

namespace App\Models;

interface IntegratorI{
    public function request();
}
abstract class Integrator{
    public $url;
    public function request($request){
        
    }

    public function revealComponent(){
        
    }
}