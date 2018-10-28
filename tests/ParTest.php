<?php
use PHPUnit\Framework\TestCase;
require 'Par.php';

class PaTests extends TestCase
{
    private $par;
 
    protected function setUp()
    {
        $this->par = new Par();
    }
 
    protected function tearDown()
    {
        $this->Par = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->par->esPar(4);
        $this->assertEquals(true, $result);
    }

   
}
