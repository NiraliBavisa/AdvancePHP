<?php 
echo "*<b><u> OOPs Concepts *</u></b><br><br>";
class user { 
    private $userId; 
    private $pwd; 
    public function updatePwd($userId, $pwd) { 
        echo("Function to update password => '"
                . $pwd . "' for user => " . $userId); 
          
        echo "<br>"; 
    } 
    public function courseName($userId) { 
        echo("Function to check course name of user => "
                . $userId); 
        echo "<br>"; 
    } 
} 
$obj = new user(); 
$obj -> updatePwd('user1', 'user123'); 
$obj -> courseName('PHP'); 
echo "<br>*<b><u> Class</u></b> *<br><br>";
class Vehicle {
    private $brand;
    private $model;
    private $year;
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function displayDetails() {
        echo "Brand: " . $this->brand . "</br>";
        echo "Model: " . $this->model . "</br>";
        echo "Year: " . $this->year . "</br>";
    }
}
$car = new Vehicle("Ford", "Figo", 2020);
$car->displayDetails();
echo "<br>*<b><u> Object</u></b> *<br><br>";
class Car {
  public $comp; 
  public $color = 'White';
  public $hasSunRoof = true;
  public function hello()
  {
    return "beep";
  }
}
$bmw = new Car ();
$mercedes = new Car ();
echo $bmw -> color; 
echo "<br />";
echo $mercedes -> color;
echo "<br />";
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
echo $bmw -> color; 
echo "<br />";
echo $mercedes -> color; 
echo "<br />";
echo $bmw -> comp; 
echo "<br />";
echo $mercedes -> comp; 
echo "<br />";
echo $bmw -> hello(); 
echo "<br />";
echo $mercedes -> hello(); 

echo "<br><br>*<b><u> Extends</u></b> *<br><br>";
class vehicle1 {
    protected $model;
    public function setModel($model)
    {
      $this -> model = $model;
    }
  }
  class car1 extends vehicle1 {
    public function hello()
    {
      return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
  }
  $sportsCar1 = new car1();
  $sportsCar1 -> setModel('Mercedes Benz');
  echo $sportsCar1 -> hello();

echo "<br>*<b><u> Overloading</u></b> *<br><br>";
class GFG {
     
     
    public function __call($name, $arguments) {
         
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }
    public static function __callStatic($name, $arguments) {
         
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}
$obj = new GFG;
$obj->runTest('in object context'); 
GFG::runTest('in static context'); 

echo "<br><br>*<b><u> Abstraction Interface</u></b> *<br><br>";
interface VehicleInterface{
    public function start();
  public function stop();
} 
class Vehicle11 implements VehicleInterface{
    public function start(){
        echo "start Called<br>";
    } 
    public function stop(){
        echo "stop Called<br>";
    }
} 
$obj = new Vehicle11;
$obj->start();
$obj->stop();

echo "<br>*<b><u> Constructor</u></b> *<br><br>";
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();

echo "<br><br>*<b><u> Destructor</u></b> *<br><br>";
class vegi {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "<br>The Vegitable is {$this->name} and the color is {$this->color}.";
  }
}

$tomato = new vegi("Tomato", "red");

echo "<br><br>*<b><u> Magic Methods</u></b> *<br><br>";
class MyClass {
  
  private $prop;

  public function __get($name) {
      if ($name == 'prop') {
          return 'generated value';
      }
      throw new Exception('Property does not exist');
  }
  public function __set($name, $value) {
    if ($name == 'prop') {
        $this->prop = $value;
    } else {
        throw new Exception('Property does not exist');
    }
}}

$obj = new MyClass();
echo $obj->prop;

echo "<br><br>*<b><u> Scope Resolution</u></b> *<br><br>";
class Test1
{
    var $x=1;
    public $y=2;
    private static $a =89;
    private static $z=3;
    public function t1()
    {
        echo "t1<br>".Test1::$z."<br>";
        echo Test1::$a."<br>";
        Test1::t2();
    }
    private static function t2()
    {
        echo "t2<br>";
    }
}
$obj1 = new Test1;
$obj2 = new Test1;
echo "x = ".$obj1->x."<br>";
echo "y = ".$obj2->y."<br>";
$obj1->t1();

echo "<br>*<b><u> Traits</u></b> *<br><br>";
trait B 
{
    public function getB()
    {
        echo "B<br>";
    }
}
trait C 
{
    public function getC()
    {
        echo "C<br>";
    }
}
class A 
{
    use B;
    use C;
    public function getA()
    {
        echo "A<br>";
    }
}
$obj = new A;
$obj->getA();
$obj->getB();
$obj->getC();

echo "<br>*<b><u> Visibility</u></b> *<br><br>";
class MyClass1
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';
    protected $protected = 'protected var';
    private   $private   = 'private var';
    function iterateVisible() {
       echo "MyClass::iterateVisible:<br>";
       foreach ($this as $key => $value) {
           print "$key => $value<br>";
       }
    }
}
$class = new MyClass1();
foreach($class as $key => $value) {
    print "$key => $value<br>";
}
echo "<br>";
$class->iterateVisible();

echo "<br>*<b><u> Type Hinting</u></b> *<br><br>";
class Car11 {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car11("red", "Volvo");
var_dump($myCar);

echo "<br><br>*<b><u> Final Keyword</u></b> *<br><br>";
class ellipse {
  final public const PI=22/7;
  private float $a, $b;
  public function __construct($x, $y) {
     $this->a = $x;
     $this->b = $y;
  }
  final public function area() : float {
     return self::PI*$this->a*$this->b;
  }
}
class circle extends ellipse {
  public function __construct(float $x) {
     parent::__construct($x, $x);
  }
}
$c1 = new circle(5);
echo "Area: " . $c1->area() . PHP_EOL;

echo "<br><br>*<b><u> Email Security Function</u></b> *<br><br>";
$userInputEmail = "john.doe@example.com<script>alert('XSS');</script>";
$sanitizedEmail = filter_var($userInputEmail, FILTER_SANITIZE_EMAIL);
if (filter_var($userInputEmail, FILTER_VALIDATE_EMAIL)) {
  echo "<br>The email address '$userInputEmail' is considered valid.<br>";
} else {
  echo "<br>The email address '$userInputEmail' is considered invalid.<br>";
}

echo "Original: " . $userInputEmail . "<br>";
echo "Sanitized: " . $sanitizedEmail;

echo "<br><br>*<b><u> File Handling</u></b> *<br><br>";
$filename = "c:\xampp\htdocs\AdvancePHP\ppp.txt";
try {
    $fileContents = file_get_contents($filename);
    echo "File Contents:<br>";
    echo $fileContents;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

echo "<br><br>*<b><u> Handling Emails</u></b> *<br><br>";
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

echo "<br><br>*<b><u> MVC Architecture</u></b> *<br><br>";
include 'Router.php';
include 'UserController.php';

$router = new Router(require 'routes.php');
$router->route($_SERVER['REQUEST_URI']);

echo "<br><br>*<b><u>Connection with MySQL Database</u></b> *<br><br>";
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo "<br><br>*<b><u>Practical: Exception Handling with Try-Catch for Database ConnectionandQueries</u></b> *<br><br>";
class customException extends Exception {
  public function errorMessage() {
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}
$email = "someone@example.com";
try {
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    throw new customException($email);
  }
  if(strpos($email, "example") !== FALSE) {
    throw new Exception("$email is an example e-mail");
  }
}

catch (customException $e) {
  echo $e->errorMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}

echo "<br><br>*<b><u>Server-Side Validation while Registration using Regular Expressions</u></b> *<br><br>";
$password = "GeeksforGeeks@123";

$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';

if (preg_match($pattern, $password)) {
    echo "Valid Password<br>";
} else {
    echo "Invalid Password<br>";
}
$email = "user@gmail.com"; 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    echo("$email is a valid email address<br>"); 
}  
else { 
    echo("$email is not a valid email address<br>"); 
} 
  
echo "<br><br>*<b><u>Session and Cookies</u></b> *<br><br>";
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name]."<br>";
}
?>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "<br>Session variables are set.";
?>

</body>
</html>
<?php
echo "<br><br>*<b><u>File Upload</u></b> *<br><br>";
?>
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php echo "<br><br>*<b><u>PHP with MVC Architecture</u></b> *<br><br>"; ?>