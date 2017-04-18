<?php

require_once('LoginHandler.php');

class LoginHandlerTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }
  
  public function testCorrectLength ()
  {
	$username = "chr";
	$password = "asdf";
	//depending on how your file is this may change.
	$this->assertTrue(LoginHandler->login($username,$password) == false);
  }
  
  public function testCorrectLength2 ()
  {
    $username = "";
	$password = "asdf";
	$this->assertTrue(LoginHandler->login($username,$password) == false);
  }
  
  public function testCorrectLength3 ()
  {
	$username = "chri9449";
	$password = "asdf";
	$this->assertTrue(LoginHandler->login($username,$password) !== false); 
  }
  
  public function testCorrectUsername ()
  {
	$username = "chri944";
	$password = "asdf";
	$this->assertTrue(LoginHandler->login($username,$password) == false);
  }
  
  public function testCorrectPassword ()
  {
	$username = "chri9449";
	$password = "asd";
	$this->assertTrue(LoginHandler->login($username,$password) == false);
  }
  
  public function testExists ()
  {
	$username = "DoesNotExist";
	$password = "12345"
	$this->assertTrue(LoginHandler->login($username,$password) == false);
  }
}
?>
