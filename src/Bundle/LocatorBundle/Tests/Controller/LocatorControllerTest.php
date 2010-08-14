<?php

namespace Bundle\LocatorBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class LocatorControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/find/mobile');

        $this->assertFalse($crawler->filter('html:contains("Where is my Mobile now?")')->isEmpty());
    }
}
