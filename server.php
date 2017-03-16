<?php

require_once 'vendor/autoload.php';

$server = new \MayMeow\SocketServer('tcp://0.0.0.0:9878');

$server->addAction('Play', new \MayMeowCodes\SoundPlayer\Actions\PlayAction());
$server->addAction('Stop', new \MayMeowCodes\SoundPlayer\Actions\StopAction());

$server->connect();