<?php
namespace App\Models;

class IntegrationOperator {

    public function revealComponent($service){
        switch($service){
            case 'telegramBot':
                return new TelegramBot();
            default:
                break;    
        }
    }
        
}