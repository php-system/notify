<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSystem\Notify;

class ProviderFactory
{
    static public function getAvailable()
    {
        return new Provider\NotifySend();
    }
}
