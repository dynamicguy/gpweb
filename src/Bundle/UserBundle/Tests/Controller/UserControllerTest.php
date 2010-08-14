<?php

namespace Bundle\UserBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/user/login');

        $this->assertFalse($crawler->filter('html:contains("Login at GPWeb")')->isEmpty());
    }
}
