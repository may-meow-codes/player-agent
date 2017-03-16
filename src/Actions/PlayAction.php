<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/15/2017
 * Time: 9:03 PM
 */

namespace MayMeowCodes\SoundPlayer\Actions;

use MayMeow\Actions\AbstractAction;

class PlayAction extends AbstractAction
{
    public function response($options = null)
    {
        $uri = 'screen -d -m omxplayer -o local ' . $options->url;

        exec($uri);

        return 'OK';
    }
}