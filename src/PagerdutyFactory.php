<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Alt Three LTD <support@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Pagerduty;

use GuzzleHttp\Client;
use NotifyMeHQ\Contracts\FactoryInterface;
use NotifyMeHQ\NotifyMe\Arr;

class PagerdutyFactory implements FactoryInterface
{
    /**
     * Create a new pagerduty gateway instance.
     *
     * @param string[] $config
     *
     * @return \NotifyMeHQ\Pagerduty\PagerdutyGateway
     */
    public function make(array $config)
    {
        Arr::requires($config, ['token']);

        $client = new Client();

        return new PagerdutyGateway($client, $config);
    }
}
