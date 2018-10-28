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
 
    public function testAddCero()
    {
        $result = $this->par->esPar(0);
        $this->assertEquals(true, $result);
    }
	  public function testAddPar()
    {
        $result = $this->par->esPar(4);
        $this->assertEquals(true, $result);
    }
	  public function testAddImpar()
    {
        $result = $this->par->esPar(5);
        $this->assertEquals(true, $result);
    }

   
}
