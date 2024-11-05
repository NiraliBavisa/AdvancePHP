<?php 
echo "*<b><u> OOPs Concepts *</u></b><br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
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
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
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
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
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
echo "<br>*<b><u> Extends</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Overloading</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Abstraction Interface</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Constructor</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Destructor</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Magic Methods</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Scope Resolution</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Traits</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Visibility</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Type Hinting</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Final Keyword</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Email Security Function</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> File Handling</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Handling Emails</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> MVC Architecture</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
echo "<br>*<b><u> Practical Example: Implementation of all the OOPs Concepts</u></b> *<br><br>";
echo "<b><u><br> Practical Exercise: </u></b><br> ";
?> 