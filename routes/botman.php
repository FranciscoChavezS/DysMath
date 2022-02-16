<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('hola', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
