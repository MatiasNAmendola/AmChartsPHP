<?php

namespace AmCharts\Chart\DataProvider\Reader;

class XmlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Xml
     */
    protected $object;
    
    public function setUp()
    {
        $this->object = new Xml;
    }
    
    public function testFromString()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8" ?>
<root>
    <item>
        <name>Foo</name>
        <value>1</value>
    </item>
    <item>
        <name>Bar</name>
        <value>2</value>
    </item>
    <item>
        <name>Baz</name>
        <value>3</value>
    </item>
</root>';
        
        $items = $this->object->fromString($xml);
        
        $this->assertCount(3, $items);
        
        $this->assertEquals('Foo', $items[0]['name']);
        $this->assertEquals(1, $items[0]['value']);
    }
}