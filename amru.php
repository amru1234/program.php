
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
o check if an object is not an instanceof a class, the logical not operator can be used.
<?php
class MyClass
{
}
$a = new MyClass;
var_dump(!($a instanceof stdClass));
?>
<?php
interface A
{
    const B = 'Interface constant'."\n";
}

// Prints: Interface constant
echo A::B;


class B implements A
{
    const B = 'Class constant'."\n";
}

// Prints: Class constant
// Prior to PHP 8.1.0, this will however not work because it was not
// allowed to override constants.
echo B::B;
?>
<?php

class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
    return ClassA::class;
}

var_dump(new ClassA instanceof ('std' . 'Class'));
var_dump(new ClassB instanceof ('Class' . 'B'));
var_dump(new ClassC instanceof ('Class' . 'A'));
var_dump(new ClassD instanceof (getSomeClass()));
?>
//is_a() example
<?php
// define a class
class WidgetFactory
{
  var $oink = 'moo';
}

// create a new object
$WF = new WidgetFactory();

if (is_a($WF, 'WidgetFactory')) {
  echo "yes, \$WF is still a WidgetFactory\n";
}
?>
Q #4) What is meant by variable variables in PHP?

Answer: When the value of a variable is used as the name of the other variables then it is called variable variables. $$ is used to declare variable variables in PHP.

Sample code:

$str = "PHP";
$$str = " Programming"; //declaring variable variables
echo "$str ${$str}"; //It will print "PHP programming"
echo "$PHP"; //It will print "Programming"
<?php
$text = "I like programming";
print_r (explode(" ",$text));
$strarr = array('Pen','Pencil','Eraser');
echo implode(" ",$strarr);
?>
<?php
if(!fopen('t.txt','r'))
exit(" Unable to open the file");
?>

//Q #10) Which function is used in PHP to check the data type of any variable?
Answer: gettype() function is used to check the data type of any variable.v
<?php
echo gettype(true);
echo "\n";//boolean
echo gettype(10);
echo "\n";//integer
echo gettype('Web Programming');
echo "\n";//string
echo gettype(null);
echo "\n";//NULL

?>

Q #11) How can you increase the maximum execution time of a script in PHP?

Answer: You need to change the value of the max_execution_time directive in the php.ini file for increasing the maximum execution time.

For Example, if you want to set the max execution time for 120 seconds, then set the value as follows,

max_execution_time = 120

<?php
function test($n) {
$n=$n+10;
}
 
$m=5;
test($m);
echo $m;
?>
// typecasting type junggling
<?php
$str = "10"; // $str is now string
$bool = (boolean) $str; 
echo $bool;
?>
//Answer: The way by which PHP can assign a particular data type for any variable is called typecasting. The required type of variable is mentioned in the parenthesis before the variable.
//PHP does not support datatype for variable declaration. The type of the variable is changed automatically based on the assigned value and it is called type juggling.
<?php
$val = 5; // $val is now number
$val = "500"; //$val is now string
echo gettype($val);
?>
//You have to provide MySQL hostname, username, and password to make a connection with the MySQL server in mysqli_connect() method or declaring database object of the mysqli class.

Sample code:

$mysqli = mysqli_connect("localhost","username","password");
$mysqli = new mysqli("localhost","username","password");

//mysqli_pconnect() function is used for making a persistent connection with the database that does not terminate when the script ends.

mysqli_connect() function searches any existing persistence connection first and if no persistence connection exists, then it will create a new database connection and terminate the connection at the end of the script.

Sample code:

$DBconnection = mysqli_connect("localhost","username","password","dbname");
// Check for valid connection
if (mysqli_connect_errno())
{
echo "Unable to connect with MySQL: " . mysqli_connect_error();
}
mysqli_pconnect() function is depreciated in the new version of PHP, but you can create a persistence connection using mysqli_connect with the prefix p.

//mysqli_num_rows() function is used to count the total number of rows returned by the query.

Sample code:

$mysqli = mysqli_connect("hostname","username","password","DBname");
$result=mysqli_query($mysqli,"select * from employees");
$count=mysqli_num_rows($result);
//Q #18) How can you create a session in PHP?

Answer:

session_start() function is used in PHP to create a session.

Sample code:

session_start(); //Start session
$_SESSION['USERNAME']='Fahmida'; //Set a session value
unset($_SESSION['USERNAME']; //delete session value


Q #20) Which function you can use in PHP to open a file for reading or writing or for both?

Answer: You can use fopen() function to read or write or for doing both in PHP.

Sample code:

$file1 = fopen("myfile1.txt","r"); //Open for reading
$file2 = fopen("myfile2.txt","w"); //Open for writing
$file3 = fopen("myfile3.txt","r+"); //Open for reading and writing

Q #21) What is the difference between include() and require()?

Answer: Both include() and require() function are used for including PHP script from one file to another file. But there is a difference between these functions.

If any error occurs at the time of including a file using include() function, then it continues the execution of the script after showing an error message. require() function stops the execution of a script by displaying an error message if an error occurs.

Sample code:

if (!include(‘test.php’)) echo “Error in file inclusion”;
if (!require(‘test.php’)) echo “Error in file inclusion”;

//unlink() function is used in PHP to delete any file.

Sample code:

unlink('filename');

<?php
// strip_tags() function is used to retrieve the string from a text by omitting HTML, XML and PHP tags. This function has one mandatory parameter and one optional parameter. The optional parameter is used to accept particular tags.Your code here!
echo strip_tags("<b>PHP</b> is a popular <em>scripting</em> language");
print("\n");
echo strip_tags("<b>PHP</b> is a popular <em>scripting</em> language","<b>");
?>

 //How can you send an HTTP header to the client in PHP?
Answer: The header() function is used to send raw HTTP header to a client before any output is sent.
Sample code:
header('Location: http://www.your_domain/');

//count() and sizeof() functions can be used to count the total number of array elements in PHP.

<?php
$names = array("a", "Prinka", "Abhijeet");
echo count($names);
$marks = array(95, 70, 87);
echo sizeof($marks);
?>
//substr() function returns a part of the string based on the starting point and length. Length parameter is optional for this function and if it is omitted then the remaining part of the string from the starting point will be returned.

//strstr() function searches the first occurrence of a string inside another string. The third parameter of this function is optional and it is used to retrieve the part of the string that appears before the first occurrence of the searching string.
<?php
echo substr("Computer Programming",9,7)."\n"; //Returns “Program”
echo substr("Computer Programming",9)."\n"; //Returns “Programming”
echo strstr("Learning Laravel 5!","Laravel")."\n"; //Returns Laravel 5!
echo strstr("Learning Laravel 5!","Laravel",true)."\n"; //Returns Learning
?>

Q #27) How can you upload a file using PHP?

Answer: To upload a file by using PHP, you have to do the following tasks.

(i) Enable file_uploads directive

Open php.ini file and find out the file_uploads directive and make it on.

file_uploads = On
(ii) Create an HTML form using enctype attribute and file element for uploading the file.

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="upd" id="upd">
<input type="submit" value="Upload" name="upload">
</form>
(iii) Write a PHP script to upload the file

if (move_uploaded_file($_FILES["upd"]["tmp_name"], "Uploads/")) {
echo "The file ". basename( $_FILES["upd"]["name"]). " is uploaded.";
} else {
echo "There is an error in uploading.";
}

//in_array() function is used to search a particular value in an array.

Sample code:

$languages = array("C#", "Java", "PHP", "VB.Net");
if (in_array("PHP", $languages)) {
echo "PHP is in the list";
}
else {
echo "php is not in the list";
}

//the $_REQUEST variable is used to read the submitted form field with the name ‘username’. If the form is submitted without any value, then it will print as “Name is empty”, otherwise it will print the submitted value.

<?php
if (isset($_POST['submit'])) {
// collect value of input field
$name = $_REQUEST['username'];
if (empty($name)) {
echo "Name is empty";
} else {
echo $name;
}
}
else
{
?>
<form method="post" action="#">
Name: <input type="text" name="username">
<input type="submit" name="submit">
</form>
<?php } ?>

<?php
//Loop will iterate for 5 times
for ($n = 0; $n <= 5; $n++) {
echo "The number is: $n \n";
}

print("\n");
//Loop will iterate based on array elements 
$parts = array("HDD", "Monitor", "Mouse", "Keyboard"); 
foreach ($parts as $value) { 
      echo "$value \n"; }
?>

<?php
//Loop will iterate for 5 times
$n = 10;
if ($n === "10")
echo "n is equal to 10";
else
echo "n is not equal to 10"; //This will print
?>
//he full form of PEAR is “PHP Extension and Application Repository”.

//Anyone can download reusable PHP components by using this framework at a free of cost. It contains different types of packages from different developers.



//Different type of errors can occur in PHP.

//Some major error types are mentioned below:

//Fatal Errors– The execution of the script stops when this error occurs.
Sample code:

In the following script, f1() function is declared but f2() function is called which is not declared. The execution of the script will stop when f2() function will call. So, “Testing Fatal Error” will not be printed.

<?php
// Your code here!
function f1() 
{ echo "function 1"; 
}
f2(); 
echo “Testing Fatal Error”;
?>

//Parse Errors– This type of error occurs when the coder uses a wrong syntax in the script.
Sample code:

//Here, semicolon(;) is missing at the end of the first echo statement.

<?php
echo "This is a testing script&lt;br/&gt;"
echo "error";
?>

//Warning Errors- This type of error does not stop the execution of a script. It continues the script even after displaying the error.
Sample code:

//In the following script, if the test.txt file does not exist in the current location then a warning message will display to show the error and print “Opening File” text by continuing the execution.

$handler = fopen("test.txt","r");
echo "Opening File";

//Notice Errors- This type of error shows a minor error of the script and continues the execution after displaying the error.
Here, the variable, $a is defined but $b is not defined. So, a notice of the undefined variable will display for “echo $b” statement and print “Checking notice error” by continuing the script.

Sample code:

$a = 100;
echo $b;
echo "Checking notice error";

//Inehritance Public acess modifier
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "."\n"; 
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>

//Inheritance protected acess modifier
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected
?>

<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "."<br>";
    // Call protected function from within derived class - OK 
    $this -> intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?> 
</body>
</html>

//PHP - Overriding Inherited Methods
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();
?>

<?php
$str = " Tutorials for your help";
echo $val1 = trim($str)."\n";//remove witespaces letf and write 
echo $val2 = ltrim($str)."\n";//remove whitespaces only left side
echo $val3 = rtrim($str)."\n";//remove whitespaces only right side
?>
//class And Objects(opps concept)
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>
//this keyword
<?php
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");

echo $apple->name;
?>
<?php
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name;
?>
//instanceof method
<?php
class Fruit {
  public $name;
}
$apple = new Fruit();
var_dump($apple instanceof Fruit);
?>//__construct($name)
<?php
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
?>
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
//__destructor()
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");
?>
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");
?>
//Acess Modifier(public, private, protected)
<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

echo $mango = new Fruit();
echo $mango->set_name('Mango'); // OK
echo $mango->set_color('Yellow'); // ERROR
echo $mango->set_weight('300'); // ERROR
?>
//class Constant in opps
<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
?>

//self keyword
<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
echo $goodbye->byebye();
?>
//abstract classes
<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>
<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that are not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>
<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
echo $animal->makeSound();
?>

<?php
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>
//traits/use(Keywod)
<?php
trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
echo $obj->msg1();
?>
<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
echo $obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
echo $obj2->msg1();
echo $obj2->msg2();
?>
//static method
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
echo greeting::welcome();
?>
//self keyword
<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>
<?php
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();
?>
<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>
//static properties
<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>
// self keyword
<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo $pi->staticValue();
?>
//self and Parent keyword
<!DOCTYPE html>
<html>
<body>

<?php
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  } 
}

// Get value of static property directly via child class
echo x::$value;
echo "<br>";

// Get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>
 
</body>
</html>
<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>

<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;

  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}

class Row {
  public $numCells = 0;
  public function message() {
    echo "<p>The row has {$this->numCells} cells.</p>";
  }
}
<?php
include "Html.php";

$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>             
?>
//Namespace alice

Result Size: 632 x 445
index.phpHtml.php 
<?php
include "Html.php";
use Html as H;
$table = new H\Table();
$table->title = "My table";
$table->numRows = 5;
?>

<html>
<body>

<?php $table->message(); ?>

</body>
</html>
//use of namespace alise and use keyword
<?php
include "Html.php";
use Html\Table as T;
$table = new T();
$table->title = "My table";
$table->numRows = 5;
?>

<html>
<body>

<?php $table->message(); ?>

</body>
</html>

<?php
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["a", "b", "c"];
printIterable($arr);
?>
<?php
function getIterable():iterable {
  return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Create an Iterator
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
?>

</body>
</html>

*/


*/






