<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
class BotManController extends Controller
{
    public function handle(){
        
        $botman = app('botman');
        $botman->hears('{message}',function($botman,$message){
            if($message == "Hola"){
                $this->askName($botman);
            }else{
                $botman->replay("Escribe Hola para continuar");    
            }
        });
        $botman->listen();
    }
    public function askName($botman){

        $botman->ask("Hola , 
                    Cual es tu nombre?",function(Answer $answer){
            $name =$answer->getText();

            $this->say('Buen dia  '.$name );
        });
    }
}
