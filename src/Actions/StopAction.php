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
 * @file StopAction.php
 */

namespace MayMeowCodes\SoundPlayer\Actions;

use MayMeow\Actions\AbstractAction;

class StopAction extends AbstractAction
{
    /**
     * Function Stop
     * Stops playing
     *
     * @param null $options
     * @return string
     */
    public function response($options = null)
    {
        exec('pkill omxplayer.bin');

        return 'OK';
    }

}