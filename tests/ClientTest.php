<?php

namespace PostNord\Tests;

use PostNord\Client as PostNord_Client;
use PostNord\Request as PostNord_Request;

/**
 * Class ClientTest
 *
 * @package PostNord
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{

    protected $api_key = 'b76841571623d33068c6b47fdc80abdf';
    protected $contactId;
    protected $organizationId;

    public function getClient($key)
    {
        $request = new PostNord_Request($key);
        return new PostNord_Client($request);
    }

    public function testConstructor()
    {
        $invalid_api_key = 'invalid';
        $client = $this->getClient($invalid_api_key);
        $this->assertTrue(is_object($client));
    }

    public function testFindNearest()
    {
        $client = $this->getClient($this->api_key);
        $result = $client->findNearestByZipCode(45153);
        $this->assertEquals(1, count($result));
    }
}
