<?php



require "vendor/autoload.php";

$access_token = 'O+8w338ABfNYu+XG9Jk4Tsy+4OERj2XsWdZdjhLJNLSOwtx6iT0A+mKgDeaCHtia63gEplt0FUtWFLPAmSF4BA+q3iVClo3rqoBLUBTjh09gcrNgk3HOzZk5WBjLl5PDEd4Vvyw8j3QYOcjwmGjhNwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '355e0ada37e6701ea01141cb9e4fbf6c';

$pushID = 'U3990607f2f3ca794c023c428c8e7539d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







