<?php

namespace Bundle\SmsBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class SmsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/sms/home');

        $this->assertFalse($crawler->filter('html:contains("Send SMS now!")')->isEmpty());
    }
}
