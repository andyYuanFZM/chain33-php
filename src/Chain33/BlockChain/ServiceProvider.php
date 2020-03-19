<?php

namespace Jason\Chain33\BlockChain;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app): void
    {
        $app['blockchain'] = static function ($app) {
            return new Client($app);
        };
    }

}
