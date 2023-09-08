
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
*/

