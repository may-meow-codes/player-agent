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
 * @file RegisterAction.php
 */

/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/18/2017
 * Time: 10:35 PM
 */

namespace MayMeowCodes\SoundPlayer\Actions;


class RegisterAction extends \MayMeow\Actions\RegisterAction
{
    protected function configure()
    {
        $this
            ->setName('Register')
            ->setServiceType('audio');
    }

}