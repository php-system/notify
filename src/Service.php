<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSystem\Notify;

class Service
{
    protected $provider;

    public function __construct($provider)
    {
        $this->provider = $provider;
    }
} 