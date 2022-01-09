<?php

$content = file_get_contents("put://input");


$update = json_decode($content, true);

$chat_id = $update["message"] ['chat'] ['id'];
$text = $update["message"]['text'];

$url = 'https://api.telegram.org/bot5017943929:AAFYkEqdueIIKVOn_wZoMAGpXduRA6hRSCs/sendMessage?chat_id='.$chat_id.'&text'.$content;

file_get_contents($url) ;

?>
