<?php
$botman = app('botman');


$botman->hears('foot',function($bot){
$bot->reply('ball');
});

$botman->hears('hi',function($bot){
$bot->reply('hello');
});

$botman->hears('ke xa',function($bot){
    $bot->reply('thikxa');
    });

    $botman->hears('i need a room',function($bot){
        $bot->reply('which room do you want?');
        });

        $botman->hears('tell us category',function($bot){
            $bot->reply('we have standard, delux and private ');
            });

            $botman->hears('I want private',function($bot){
                $bot->reply('ok it is available now  ');
                });

                $botman->hears('what is a cost',function($bot){
                    $bot->reply(' for private Rs4000');
                    });

                    $botman->hears('book my room',function($bot){
                        $bot->reply(' please transfer payement on this account XXXXXX and remarked as private room');
                        });

                        

                            

?>