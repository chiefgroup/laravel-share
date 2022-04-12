<?php


namespace ChiefGroup\LaravelShare\Tests;



use ChiefGroup\LaravelShare\QiniuServiceFacade;

class BaseTest extends TestCase
{
    public function testExample()
    {
//        $r = app('IdGeneratorService')->id();
        $r = QiniuServiceFacade::bucketDomains(true);
        var_dump($r);
        $this->assertTrue(true);
    }
}