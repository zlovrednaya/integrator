<?php
//integrator_talk
class TelegramBot extends Integrator{
    public $api_key = '6191341752:AAFokKPO4EX6tLZKqW9x521B0VqQ2XBbpm8';
    public $url = "https://api.telegram.org/bot{{api_key}}";
    public $path;

    public function getUrl($action){
        $url2='';
        switch($action){
            case 'updates':
                $url2 = 'getUpdates';
                break;
        }

        return  $this->url . '/' . $url2;
    }
   public function getLastMessage(){
        $updatesArr=$this->request('updates');

   }
    public function getData($action){
        $data=[];
        switch($action){
            case 'updates':
                $data=[];
                break;
        }
        return $data;
   }
   
    public function request($action){
        $path = $this->getUrl($action);
        $data = $this->getData($action);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_POST, 1);
       // curl_setopt($ch, CURLOPT_POSTFIELDS, "name=value");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;

    }
}