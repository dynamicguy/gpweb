<?php

namespace Bundle\MmsBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class MmsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/mms/home');

        $this->assertFalse($crawler->filter('html:contains("Send MMS now!")')->isEmpty());
    }
}
