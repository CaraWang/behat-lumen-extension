<?php

namespace Arisro\Behat\Driver;

use Behat\Mink\Driver\BrowserKitDriver;
use Symfony\Component\HttpKernel\Client;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class LumenDriver extends BrowserKitDriver
{

    /**
     * Create a new KernelDriver.
     *
     * @param HttpKernelInterface $app
     * @param string|null         $baseUrl
     */
    public function __construct(HttpKernelInterface $app, $baseUrl = null)
    {
        parent::__construct(new Client($app), $baseUrl);
    }

    /**
     * Refresh the driver.
     *
     * @param HttpKernelInterface $app
     * @return LumenDriver
     */
    public function reboot($app)
    {
        return $this->__construct($app);
    }

}
