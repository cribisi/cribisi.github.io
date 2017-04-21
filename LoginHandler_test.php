<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;


require_once('LoginHandler.php');

class LoginHandlerTest extends TestCase 
{
  public function setUp(){ }
  public function tearDown(){ }  
  
  
  public function testCorrectLength ()
  {
	$LoginHandler = new LoginHandler();
	$username = "chri9449";
	$password = "asd";
	$this->assertTrue($LoginHandler.checkLength($username, $password));
  }
  
  public function testCorrectLength2 ()
  {
	$LoginHandler = new LoginHandler();
	$username = "";
	$password = "12345";
	$this->assertFalse($LoginHandler.checkLength($username, $password));
  }
}
?>
