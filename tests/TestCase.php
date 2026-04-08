<?php

namespace Tests;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        /** @var Repository $config */
        $config = $this->app->make('config');

        $config->set('cache.default', 'array');
        $config->set('session.driver', 'array');
        $config->set('session.connection', null);
        $config->set('session.store', null);
    }
}
