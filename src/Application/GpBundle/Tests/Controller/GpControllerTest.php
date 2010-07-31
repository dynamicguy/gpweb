<?php

namespace Application\GpBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class GpControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/gp/Fabien');

        $this->assertFalse($crawler->filter('html:contains("Gp Fabien")')->isEmpty());
    }
}
