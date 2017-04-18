<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

require_once('LoginHandler.php');

class LoginHandlerTest extends TestCase 
{
  public function setUp(){ }
  public function tearDown(){ }  
  
  public function testlogin()
  {
    $LoginHandler = new LoginHandler();
	$username = "chri944";
	$password = "asdf";
	$this->assertEquals("You've successfully logged in",$LoginHandler->login($username,$password));
       
  }
  
  public function testCorrectPassword ()
  {
	$username = "chri9449";
	$password = "asd";
	$this->expectOutputString("You entered an incorrect username or password, please try again");
        print login($username,$password);
  }
  
  public function testExists ()
  {
	$username = "DoesNotExist";
	$password = "12345";
	$this->expectOutputString('Your username was not found please try again');
        print login($username,$password);
  }
}
?>
