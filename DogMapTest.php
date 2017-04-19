<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

require_once('DogMap.php');

class DogMapTest extends TestCase 

{
  public function setUp(){ }
  public function tearDown(){ }  
  
  public function testCoordinateCheckFalse()
  {
    $DogMap = new DogMap();
	$latitude = 1.00023;
	$longitude = 999.2323;
	$this->assertFalse($DogMap->CoordinateCheck($latitude,$longitude));
       
  }

  public function testCoordinateCheckTrue()
  {
  	$DogMap = new DogMap();
  	$latitude = 40;
  	$longitude = -105.25;
  	$this->assertTrue($DogMap->CoordinateCheck($latitude,$longitude));
  }
}
?>
