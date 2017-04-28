 <?php

  //Fernando Mercado & Lucas Sward

  use PHPUnit\Framework\TestCase;
  use PHPUnit\DbUnit\TestCaseTrait;

  require_once('InsertUsers.php');

  class InsertUsersTest extends TestCase 
  {

    public function setUp(){}
    public function tearDown(){}  
    
    //Case 1a: if all the strings are empty
    public function CheckIfAllEmptyString()
    {

    $InsertUsers= new InsertUsers();

  	$Username = "";
  	$Password = "";
    $Reppass = "";

  	$this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

    //Case 1b: if username is the only empty string
    public function testCheckIfUsernameEmptyString()
    {

    $InsertUsers= new InsertUsers();

    $Username = "";
    $Password = "abcdef";
    $Reppass = "abcdef";

    $this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

    //Case 1c: if password and reppass are empty strings
    public function testCheckIfPasswordAndReppassEmptyString()
    {

    $InsertUsers= new InsertUsers();

    $Username = "abcdef";
    $Password = "";
    $Reppass = "";

    $this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

//--------------------------------------------------------------------------------

    //Case 2a: checks if username is less than 4 characters
    public function testUsernameSize3orLess()
    {

    $InsertUsers= new InsertUsers();

    $Username = "two";
    $Password = "abcdef";
    $Reppass = "abcdef";

    $this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

    //Case 2b: checks if username is greater than 20 characters
    public function testUsernameSize21orMore()
    {

    $InsertUsers= new InsertUsers();

    $Username = "aaaaaaaaaaaaaaaaaaaaa";
    $Password = "abcdef";
    $Reppass = "abcdef";

    $this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

    //Case 2c: checks if password is less than 4
    public function testPasswordSize3orLess()
    {

    $InsertUsers= new InsertUsers();

    $Username = "abcedf";
    $Password = "two";
    $Reppass = "two";

    $this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

    //Case 2d: checks if password is greater than 20
    public function testPasswordSize21orMore()
    {

    $InsertUsers= new InsertUsers();

    $Username = "abcedf";
    $Password = "aaaaaaaaaaaaaaaaaaaaa";
    $Reppass = "aaaaaaaaaaaaaaaaaaaaa";

    $this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

//--------------------------------------------------------------------------------

    //Case 3: check if password and reppass are not similar
    public function testPasswordNotReppass()
    {

    $InsertUsers= new InsertUsers();

    $Username = "abcedf";
    $Password = "two";
    $Reppass = "twp";

    $this->assertFalse($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

//-------------------------------------------------------------------------------
    
    //Case 4: check if username, password and reppass pass all the cases
    public function testEverythingWorks()
    {

    $InsertUsers= new InsertUsers();

    $Username = "caseworks";
    $Password = "hurray";
    $Reppass = "hurray";

    $this->assertTrue($InsertUsers->TestSignUp($Username, $Password, $Reppass));
         
    }

  }
?>
