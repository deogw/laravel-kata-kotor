<?php

namespace Deogw\KataKotorLaravel\Tests;

use Deogw\KataKotorLaravel\Facades\KataKotorFacade;
use Deogw\KataKotorLaravel\Providers\KataKotorServiceProvider;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{

   protected $mockBadWord = [
       'fuck',
       'fucking',
       'anal',
       'memek',
       'bangsat',
       'sinting',
       'ass',
       'bajingan',
       'bastard',
       'titit'
       ];

    /**
     * Load package service provider
     * @param  Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [KataKotorServiceProvider::class];
    }

    /**
     * Load package alias
     * @param  Application  $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'KataKotorLaravel' => KataKotorFacade::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('kata-kotor', $this->mockBadWord);
    }
}
