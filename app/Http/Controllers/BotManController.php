<?php

namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'Que pedo pinche chat culero') {
                $this->askName($botman);
            }else{
                $botman->reply("Intenta con 'Que pedo pinche chat culero' ...");
            }
  
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hola ¿Cuál es tu nombre?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Es un placer '.$name);
        });
    }
}