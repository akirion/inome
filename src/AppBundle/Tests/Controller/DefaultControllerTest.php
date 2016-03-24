<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //$this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }
    
    public function testLog()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/log');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testSettings()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/settings');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
