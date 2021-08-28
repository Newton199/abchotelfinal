<?php
$botman = app('botman');


$botman->hears('foo',function($bot){
$bot->reply('bar');
});

$botman->hears('hi',function($bot){
$bot->reply('hello');
});

$botman->hears('ke xa',function($bot){
    $bot->reply('thikxa');
    });

    $botman->hears('namaste',function($bot){
        $bot->reply('hello');
        });
?>