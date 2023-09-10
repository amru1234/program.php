
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
*/



