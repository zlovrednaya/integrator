<?php
interface IntegratorI{
    public function request();
}
abstract class Integrator{
    public $url;
    public function request(){
        
    }
}