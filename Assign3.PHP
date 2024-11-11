<?php 
echo "*<b><u> OOPs Concepts *</u></b><br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "object-oriented programming is about creating objects that contain both data and functions.OOP is faster and easier to execute.OOP provides a clear structure for the programs.
<br>1. Encapsulation => Hiding data from outside world.Encapsulation in PHP involves restricting access to certain class members to prevent direct modification from outside the class. For example, 
declaring class properties as private and providing public methods to access and modify them ensures data integrity and encapsulation.
<br>2. Inheritance => To access properties(variable, functions) of one class to another class.(code reusablities)The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
An inherited class is defined by using the extends keyword.
<br>3. Polymorphism => Polymorphism in PHP refers to the ability of objects to take on different forms and exhibit different behaviors while sharing a common interface. It allows different classes to implement the same method name with different functionality. 
<br>4. Abstraction => Access only those properties(variable, functions) and others are hidden.An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.";
echo "<br><b><u><br> Practical Exercise: </u></b><br> ";
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
echo "<br>Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.
<br>A class may contain its own constants, variables (called 'properties'), and functions (called 'methods').";
echo "<br><b><u><br> Practical Exercise: </u></b><br> ";
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
echo "<br>An Object is an individual instance of the data structure defined by a class. We define a class once and then make many objects that belong to it. Objects are also known as instances. ";
echo "<br><b><u><br> Practical Exercise: </u></b><br> ";
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
echo "<br>Inheritance in OOP = When a class derives from another class.The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
An inherited class is defined by using the extends keyword.";
echo "<br><b><u><br> Practical Exercise: </u></b><br> ";
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
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.
The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms inaccessible properties and inaccessible methods to refer to this combination of declaration and visibility.
All overloading methods must be defined as public.";
echo "<br><b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Abstraction Interface</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br> PHP has abstract classes and methods. Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method must also be abstract. Methods defined as abstract simply declare the method's signature; they cannot define the implementation. &
Interfaces are defined in the same way as a class, but with the interface keyword replacing the class keyword and without any of the methods having their contents defined. All methods declared in an interface must be public; this is the nature of an interface.";
echo "<br><b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Constructor</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>PHP allows developers to declare constructor methods for classes. Classes which have a constructor method call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used.
The constructor may be made private or protected to prevent it from being called externally. If so, only a static method will be able to instantiate the class. Because they are in the same class definition they have access to private methods, even if not of the same object instance. The private constructor is optional and may or may not make sense depending on the use case.";
echo "<b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Destructor</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>PHP possesses a destructor concept similar to that of other object-oriented languages, such as C++. The destructor method will be called as soon as there are no other references to a particular object, or in any order during the shutdown sequence.
Like constructors, parent destructors will not be called implicitly by the engine. In order to run a parent destructor, one would have to explicitly call parent::__destruct() in the destructor body. Also like constructors, a child class may inherit the parent's destructor if it does not implement one itself.";
echo "<b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Magic Methods</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>Magic methods are special methods which override PHP's default's action when certain actions are performed on an object.
__set() is run when writing data to inaccessible (protected or private) or non-existing properties.
__get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.
Constructors are ordinary methods which are called during the instantiation of their corresponding object. As such, they may define an arbitrary number of arguments, which may be required, may have a type, and may have a default value. Constructor arguments are called by placing the arguments in parentheses after the class name.";
echo "<b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Scope Resolution</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to a constant, static property, or static method of a class or one of its parents. Moreover, static properties or methods can be overriden via late static binding.
When referencing these items from outside the class definition, use the name of the class.It's possible to reference the class using a variable. The variable's value can not be a keyword";
echo "<b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Traits</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>PHP implements a way to reuse code called Traits.A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. It is not possible to instantiate a Trait on its own. It is an addition to traditional inheritance and enables horizontal composition of behavior; that is, the application of class members without requiring inheritance.
Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. The semantics of the combination of Traits and classes is defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and Mixins.";
echo "<b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Visibility</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, protected or private. Class members declared public can be accessed everywhere. Members declared protected can be accessed only within the class itself and by inheriting and parent classes. Members declared as private may only be accessed by the class that defines the member.
Class properties may be defined as public, private, or protected. Properties declared without any explicit visibility keyword are defined as public.
The set visibility must be the same as get or more restrictive. That is, public protected(set) and protected protected(set) are allowed, but protected public(set) will cause a syntax error.
If a property is public, then the main visibility may be omitted. That is, public private(set) and private(set) will have the same result.
A property with private(set) visibility is automatically final, and may not be redeclared in a child class.";
echo "<b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Type Hinting</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<b><u><br> Practical Exercise: </u></b><br> ";

echo "<br>*<b><u> Final Keyword</u></b> *<br><br>";
echo "<b><u> Theory Exercise: </u></b><br> ";
echo "<br>The final keyword prevents child classes from overriding a method, property, or constant by prefixing the definition with final. If the class itself is being defined final then it cannot be extended.";
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