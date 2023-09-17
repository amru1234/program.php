
<!DOCTYPE html>
<html>
<body>

<?php
$arr=array('Name'=>'Amruta','Roll No'=>'123','Village Name'=>'Tumsar');
$arr[Mobile_No]=array(34567893,8905743698);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo $arr[Name]."\n";

$arr1=[1,2,3,4,5,6=>[11,12,13=>[40,41,42],14,15],7,8,9,];
echo "<pre>";
print_r($arr1);
echo "</pre>";
?>

</body>
</html>



<!DOCTYPE html>
<html>
<body>

<?php
 /*$arr=array(3,4,5,6,4,6,3,6=>array(11,12,13,14,15),7,8,9);
 print_r($arr);
 echo "<br>".count($arr);
 echo "<pre>";
 echo "<br>";
 print_r(array_count_values($arr));
 echo "</pre>";


$X=array(1,4,6,2,8,4,6);
echo "<pre>";
print_r($X);
echo "</pre>";

echo "<br>";
$Y=array(10,3,6,2,11,9,5);
echo "<pre>";
print_r($Y);
echo "</pre>";
echo "<br>";

$Z=(array_merge($X,$Y));
sort($Z);
echo"<pre>";
print_r($Z);
echo"</pre>";

 ?>
</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php

function amru($data)
{
     echo "<pre>";
     print_r($data);
     echo  "</pre>";
}

$arr=array("Amruta","Nidhi","Harsh","Karan");
for($i=0; $i<4; $i++)
{
   amru($arr);
}

?>

</body>
</html>





<?php

function vote($age)
{
    if ($age >= 18 && $age < 65)
    {
        echo "Yes, You are Eligible to Vote....";
    }
    else
    {
        echo "No, You are not Eligible to Vote....";
    }
}

$age = (int) readline("Enter age: ");
vote($age);


<!DOCTYPE html>
<html>
<body>

<?php

$a=0;
while($a<10)
{
   echo "Hello Amruta ".$a;
   echo "<br>";
   $a++;
}
?>

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
$num=20;
$sum=0;
while($num>0)
{
    echo $num;
    echo "<br>";
    $sum=$sum+$num;
    $num--;
}
echo "Sum is: ".$sum;
?>

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
$num=20;
$i=1;
while($i<=10)
{
    echo $num."x".$i."= ".$num*$i;
    echo "<br>";
    $i++;
}
echo "End";
?>

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
for($i=1; $i<=10; $i++)
{
    echo "Hello"."\t".$i;
    echo "<br>";
}
echo "End";
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
for($i=1; $i<=10; $i++)
{
    echo "Hello"."\t".$i;
    echo "<br>";
    $i++;
}
echo "End";
?>


</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
echo "Break Statement!"."<br/>";
for($i=1; $i<=10; $i++)
{
    if($i==5)
    {
        break;
    }
    echo "Hello"."\t".$i;
    echo "<br>";
   
}
echo "End"."<br>";
echo "<br/>";
echo "Continue Statement!"."<br/>";
for($i=1; $i<=10; $i++)
{
    if($i==5)
    {
        continue;
    }
    echo "Hello"."\t".$i;
    echo "<br>";
   
}
echo "End";
?>


</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
$count=0;
for($i=1; $i<=10; $i++)
{
    if($i==5)
    {
        continue;
    }
    $count++;
    echo "Hello"."\t".$i;
    echo "<br>";
   
}
echo "Total Count"."= ". $count."<br/>";
echo "End!..";
?>


</body>
</html>

!DOCTYPE html>
<html>
<body>

<?php
$a = 17;
switch($a)
{
  case ($a>=18 && $a<=65):
      echo "You can eligible for vote";
      break;
  case ($a==17):
       echo "please wait one more year";
       break;
  case ($a>65):
       echo "You are too old to vote";
       break;
  default:
       echo "You are not Eligible for Vote";
       break;

}
?>
</body>
</html>



<!DOCTYPE html>
<html>
<body>
<?php
function amru($a)
{
   if($a>50)
   {
      echo "End<br>";
   }
   else
   {
     echo $a."<br>";
     $a++;
     amru($a);
   }
}
amru(1);
?>
</body>
</html>


<!DOCTYPE html>
<html>
<body>
<?php
$s="amruta bagde";
echo strtolower($s)."<br>";
echo strtoupper($s)."<br>";
echo lcfirst($s)."<br>";
echo ucfirst($s)."<br>";
echo ucwords($s)."<br>";

?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<?php
echo ".......Character Replace.......<br>";
$name= "Amruta Bagde";
echo str_replace('e','a',$name)."<br>";
echo str_replace('a','',$name)."<br>";
echo "<br>";
echo ".......Word Replace.......<br>";
$name= "Amruta Bagde";
echo str_replace('Bagde',' ',$name)."<br>";
echo "<br>";
echo ".......substring Replace.......<br>";
$name= "Amruta Bagde is very Good girl";
echo str_replace('Good girl','Bad girl',$name)."<br>";
?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<?php
$a="Amruta Bagde";
echo strrev($a)."<br>";
$b="Hii I am Amruta Bagde and You What's Your Name?";
echo  strrev($b);
?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<?php
echo "substring<br>";
$a="Amruta Bagde";
echo substr($a,-9)."<br>";
echo substr($a,2)."<br>";
$b="Hii I am Amruta Bagde and You What's Your Name?, ohh nice and what are you doing in study now, do you graduate? Which University do you have passed." ;
echo  substr($b,-4)."<br>";
echo substr($b,0,59)
?>
</body>
</html>

<?php

$T=(int)readline(" ");

for($i=0; $i<$T; $i++)
{
    $N=(int)readline(" ");
    $res=$N*2*5;
    echo $res;
    echo "\n";
    
}

<!DOCTYPE html>
<html>
<body>
<?php
$name="Hello, I am amruta bagde and nice to meet you!<br>";
echo str_word_count($name)."<br>";
echo strlen($name)."<br>";
echo str_repeat($name,10);
?>

<!DOCTYPE html>
<html>
<body>
<?php
//OTP project
 echo rand(1,4);
 echo "<br>";
 echo rand(100,500);
 echo "<br>";
 //4 digit OTP Generated
 echo rand(1000,9999);
?>


</html>

<!DOCTYPE html>
<html>
<body>
<?php
//ceil and floor function that is used to remove decimal point.
$a=8/3;
echo $a."<br>";
echo "Ceil int is:- ".ceil($a)."<br>";
echo "floor int is:- ".floor($a);
?>

</html>
<!DOCTYPE html>
<html>
<body>
<?php
//pow and squrt function.
echo "power Function is:- ".pow(2,6)."<br>";
echo "Square root function is:- ".sqrt(9)."<br>";


?>

</html>
<!DOCTYPE html>
<html>
<body>
<?php
//pow and squrt function.
echo "power Function is:- ".pow(2,6)."<br>";
echo "Square root function is:- ".sqrt(9)."<br>";
echo "Answer is same:- ".sqrt(pow(64,2));


?>

</html>

<!DOCTYPE html>
<html>
<body>

<?php
//date default timezpne set() and getdate()
date_default_timezone_set("ASIA/KOLKATA");
echo "<pre>";
echo print_r(getdate());
echo "<pre>";
$a=getdate();

echo $a['month'];
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
//date default timezpne set() and getdate()
date_default_timezone_set("ASIA/KOLKATA");
echo "<pre>";
echo print_r(getdate());
echo "<pre>";
$a=getdate();

echo $a['wday'];

date_default_timezone_set("America/New_York");
echo "<pre>";
print_r(getdate());
echo "</pre>"

?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("ASIA/KOLKATA");

$s=strtotime('12-12-1976 12:07');
echo date('d-m-Y h:i:s:a',$s);
?>

</body>
</html>

//getdate() date() time() date_default_timezone_set/get()
//include and include_once
//required and required_once



<?php
   include_once('index.html');
   require('index.html');

?>
<body>
          
            <h2> About us</h2>
            <br>
      diagnosis, the process of determining the nature of a disease or disorder and distinguishing it from other possible conditions. The term comes from the Greek gnosis, meaning knowledge.

</center>
</body>
</html>
<?php
echo "*Copying the elements of an array to another array*\n";
$aree = array();
$n2 = (int)readline("Enter how many elements you want: ");

for ($p = 0; $p < $n2; $p++) {
    echo "Enter element as you want: ";
    $element = (int)readline();
    $aree[] = $element;
}

$dash1 = $aree;

for ($i = 0; $i < $n2; $i++) {
    echo "dash1[$i] = " . $dash1[$i] . "\n";
}
?>
Storing Reversed Elements of an Array:
php
Copy code
<?php
echo "*Storing reversed elements of an array*\n";
$aree = array();
$n2 = (int)readline("Enter how many elements you want: ");

for ($p = $n2 - 1; $p >= 0; $p--) {
    echo "Enter element as you want: ";
    $element = (int)readline();
    $aree[] = $element;
}

for ($q = 0; $q < $n2; $q++) {
    echo "aree[$q] = " . $aree[$q] . "\n";
}
?>
<?php
echo "*Storing reversed elements of an array*\n";
$aree = array();
$n2=(int)readline("Enter how many elements you want: ");

for($p = $n2 - 1; $p >= 0; $p--){
    echo "Enter element as you want: ";
    $element=(int)readline();
    $aree[]=$element;
}

for ($q=0;$q<$n2;$q++) {
    echo "aree[$q]=".$aree[$q]."\n";
}
//define keyword that are use just like const keyword in c language
?>
<?php
 define('Amru',78);
 echo Amru;
?>

 <html>
<?php
function show($a) {
    ?>
    <a href="https://www.<?php echo $a ?>.com">
    Link
    </a>
    <?php
}
?>
<body>
    <?php show("google") ?>
</body>
</html>

<?php
	fscanf(STDIN, "%s\n", $name);           
    echo "Hello ".$name.".\n";
?>
<?php
	 $name=(String)readline(" ");
    echo "Hello ".$name.".\n";
?>
<?php
fscanf(STDIN,"%d\n",$num);
echo $num;
?>

<?php
    echo 'This is a test';
?>

<?php echo 'This is a test' ?>

<?php echo 'We omitted the last closing tag';?>
<br>
<?php echo"Amruta"; echo"Nidhi";echo"Harsh";


//get_debug_type() or gettype().. that is used to find datatype.
<?php
$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// If $a_bool is a string, print it out
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

<?php
function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;
//Null Value
<?php

error_reporting(E_ALL);

$foo = NULL;
var_dump(is_null($foo));

?>
// bool datatype in PHP
<?php
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   //bool(true)
?>
//Class and Objects
<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
?>
<?php
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); 
var_dump(key($obj)); 
>?
<?php
$obj = (object) 'ciao';
echo $obj->scalar; 
?>

In PHP 7 there are a few ways to create an empty object:

<?php
$obj1 = new \stdClass; // Instantiate stdClass object
$obj2 = new class{}; // Instantiate anonymous class
$obj3 = (object)[]; // Cast empty array to object

var_dump($obj1); // object(stdClass)#1 (0) {}
var_dump($obj2); // object(class@anonymous)#2 (0) {}
var_dump($obj3); // object(stdClass)#3 (0) {}
?>
<?php
echo json_encode([
    new \stdClass,
    new class{},
    (object)[],
]);
<?php
  $object = (object) [
    'propertyOne' => 'foo',
    'propertyTwo' => 42,
  ];
  print_r($object)
 // object and class and converting to object
<?php 
$num = array("Garha","sitamarhi","canada","patna");
$obj = (object)$num;
echo "<pre>";
print_r($obj); 
$newobj = new stdClass();
$newobj->name = "India";
$newobj->work = "Development";
$newobj->address="patna";

$new = (array)$newobj;
echo "<pre>";
print_r($new); 
?>
<?php
$x = (object) array('a'=>'A', 'b'=>'B', 'C');
echo '<pre>'.print_r($x, true).'</pre>';
?>

//You can create [recursive] objects with something like:
<?php
  $literalObjectDeclared = (object) array(
     'foo' => (object) array(
          'bar' => 'baz',
          'pax' => 'vax'
      ),
      'moo' => 'ui'
   );
print $literalObjectDeclared->foo->bar;
print "\n";
echo "<pre>";
print_r($literalObjectDeclared);
?>
<?php
class Foo
{
    public $a = "I'm a!";
    public $b = "I'm b!";
    public $c;
    
    public function getB() {
        return $this->b;
    }
    
    public function setC($c) {
        $this->c = $c;
        return $this;
    }
    
    public function getC() {
        return $this->c;
    }
}

print (new Foo)->a; // I'm a!
print "\n";
print (new Foo)->getB(); // I'm b!
?>

<?php
$obj = (object)array("Test" => "bar");
$var = "Test";
echo $obj->$var;
?>

//Get Resources File
<?php
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";
?>

//get_resource_id..(we can get id of the resource). 
<?php
$handle = fopen("php://stdout", "w");

echo (int) $handle . "\n";

echo get_resource_id($handle);

?>


var_export() Function.
<?php
// the var_export() function
 
$var = '11.89';
 
$res = var_export($var, true);
 
echo $res;
 
?>

// Arrow Functions
<?php

$y = 1;
 
$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
print "\n";
var_export($fn2(3));
?>

//Nested Arrow Function
<?php

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Outputs 51
var_export($fn(5)(10));
?>
<?php

$x = 1;
$fn = fn() => $x++; 
$fn();
var_export($x);  // Outputs 1

//func_num_args()
<?php
function foo()
{
    echo "Number of arguments: ", func_num_args(), PHP_EOL;
}

foo(1, 2, 3);   
?>

<?php

function helloWorld($ArgA, $ArgB="HelloWorld!") {

  return func_num_args();

}


// The following will return 1

echo $Returns1 = helloWorld("HelloWorld!");

// The following will return 2
print "\n";

echo $Returns2 = helloWorld("HelloWorld!", "HowdyWorld!");

?>


<?php

function var_param_func(){

    if(func_num_args()==0){

        echo "NO";

    }

    if(func_num_args()==1)
    {

        echo "YES";

    }

}
var_param_func(4);
?>

<?php

function DebugShow( $label, $value ) {

  echo "# " . $label ;

  if ( func_num_args() > 1 ) echo " = " . $value ;

  echo "\n";

}
DebugShow("Amruta","Nidhi");
DebugShow(26,10);

?>
Callback example using a Closure

<?php
// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);
?>

//You can use "self::method_name", "static::method_name" and "parent::method_name" in callables:

<?php
class StaticCallable {
    public static function foo($values) {
        return array_map('self::bar', $values);
    }

    public static function bar($value) {
        return "{$value}: 42";
    }

    public static function baz($values) {
        return array_map('static::qux', $values);
    }

    public static function qux($value) {
        return "{$value}: 123";
    }
}

class StaticExtension extends StaticCallable {
    public static function bar($value) {
        return "{$value}: Marvin the Paranoid Android";
    }

    public static function qux($value) {
        return "{$value}: Zaphod Beeblebrox";
    }
}

print_r(StaticCallable::foo([1, 2, 3]));
print_r(StaticExtension::foo([1, 2, 3]));

print_r(StaticCallable::baz([1, 2, 3]));
print_r(StaticExtension::baz([1, 2, 3]));
?>

Results:
Array
(
    [0] => 1: 42
    [1] => 2: 42
    [2] => 3: 42
)
Array
(
    [0] => 1: 42
    [1] => 2: 42
    [2] => 3: 42
)
Array
(
    [0] => 1: 123
    [1] => 2: 123
    [2] => 3: 123
)
Array
(
    [0] => 1: Zaphod Beeblebrox
    [1] => 2: Zaphod Beeblebrox
    [2] => 3: Zaphod Beeblebrox
)

<?php
class Foo {
    public static function doAwesomeThings() {
        FunctionCaller::callIt(self::class . '::someAwesomeMethod');
    }

    public static function someAwesomeMethod() {
        // fantastic code goes here.
        echo "Amruta";
    }
}

class FunctionCaller {
    public static function callIt(callable $func) {
        call_user_func($func);
    }
}
Foo::doAwesomeThings();
?>

<?php
function sayHello(string $name): never
{
    echo "Hello, $name";
    exit(); // if we comment this line, php throws fatal error
}
sayHello("John"); // result: "Hello, John"
?>
//instanceof method.
<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
?>

<?php
class ParentClass
{
}

class MyClass extends ParentClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);
?>

*/






