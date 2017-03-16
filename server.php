<?php
/**
 * This file is part of MayMeow.Codes/player-agent project
 * Copyright (c) 2017 MayMeow.Codes Team
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 * @copyright Copyright (c) MayMeow.Codes Team
 * @link      http://maymeow.click
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 *
 * @project player-agent
 * @file server.php
 */

require_once 'vendor/autoload.php';

// Initialize Server
$server = new \MayMeow\SocketServer('tcp://0.0.0.0:9878');

// Add Actions
$server->addAction('Play', new \MayMeowCodes\SoundPlayer\Actions\PlayAction());
$server->addAction('Stop', new \MayMeowCodes\SoundPlayer\Actions\StopAction());

// Start Server
$server->connect();