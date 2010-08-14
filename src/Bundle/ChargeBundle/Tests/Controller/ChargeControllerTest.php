<?php

namespace Bundle\ChargeBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class ChargeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/donate');

        $this->assertFalse($crawler->filter('html:contains("Donate Now")')->isEmpty());
    }
}
