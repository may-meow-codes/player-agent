<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/15/2017
 * Time: 9:04 PM
 */

namespace MayMeowCodes\SoundPlayer\Actions;

use MayMeow\Actions\AbstractAction;

class StopAction extends AbstractAction
{
    public function response($options = null)
    {
        exec('pkill omxplayer.bin');

        return 'OK';
    }

}