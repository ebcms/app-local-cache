<?php

use Ebcms\App;
use Ebcms\Container;
use Ebcms\SimpleCache\LocalAdapter;
use Psr\SimpleCache\CacheInterface;

App::getInstance()->execute(function (
    App $app,
    Container $container
) {
    $container->set(CacheInterface::class, function () use ($app): CacheInterface {
        return new LocalAdapter($app->getAppPath() . '/runtime/cache/');
    });
});
