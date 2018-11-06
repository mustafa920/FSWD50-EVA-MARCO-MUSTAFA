<!DOCTYPE html>
<html>
<head>
	<title>day-01-php</title>
	<style>
		h1{
			text-align: center;
			position: relative;
			top: 300px;
		}
		#demo{
			color:red;
		}
		#demo1{
			color: green;
		}
		span{
			background-color: gray;
		}
		#span{
			background-color: orange;
		}
		#span1{
			background-color: lightgreen;
		}
	</style>
</head>
<body>
<?php    # ex-01

echo "<h1>HELLO WORLD ..!!</h1>";
 ?>
<?php  #ex-02

$d = date("D");
if ($d=="Mon") 
	echo "Happy Monday!" ;
else
	echo" <h1 id='demo'>Have a nice day!</h1>" ;
 ?>
 <?php    # ex-03
$m = date("D");
switch ($m)
{
case "Mon":
echo "<h1 id='demo1'>Today is Monday</h1>";
break;
case "Tue":
echo "<h1 id='demo1'>Today is Tuesday</h1>";
break;
case "Wed":
echo "<h1 id='demo1'>Today is Wednesday</h1>";
break;
case "Thu":
echo "<h1 id='demo1'>Today is Thursday</h1>";
break;
case "Fri":
echo "<h1 id='demo1'>Today is Friday</h1>";
break;
case "Sat":
echo "<h1 id='demo1'>Today is Saturday</h1>";
break;
case "Sun":
echo "<h1 id='demo1'>Today is Sunday</h1>";
break;
default:
echo "<h1 id='demo1'>Wonder which day is this ?</h1>";
}
?>
 <?php    # ex-04
$name =0;
$num = 0;
for ($i=0; $i <51 ; $i++) { 
$name = "mustafa";
$num = $i;
echo "the result in for loop is ". $num . " ".$name."<br>";
}

$j = 0;
$name1="mustafa";

while( $j < 51)
{
$num1 = $j;
$j++;
echo "<span>  the result in while loops is". $num1 . " ".$name1."</span><br>";
}
$x = 0;
$num2 = $x;
$name2 = "mustafa";
do
{
$x++;
echo ("<span id='span'>the result in do while loop is" . $num2 . " ".$name2."</span><br>");
} while( $x < 51 );


 ?>

 <?php #ex-05
 $demo = array(1,2,3,4,5,6,7,8,9,10);
 foreach( $demo as $value )
 {

 	echo "value " . $value . "<br><hr>";
 }



  ?>
   <?php #ex-06
$cartoon =array(
	'first' =>"Mickey Mouse" , 
	'second'=>" Super Mario",
	'third'=>"Goku",
	'fourth'=>" Pokemon"
);
$cartoon['first']="Mickey Mouse is funny animal cartoon character ";
$cartoon['second']="Super Mario series is part of the greater Mario franchise";
$cartoon['third']="Goku This article is about the Dragon Ball character";
$cartoon['fourth']="Pokemon For other uses, see Pokémon (disambiguation).";
echo"<span id='span1'>" . $cartoon['first'] . "</span><br/>";
echo"<span id='span1'>" . $cartoon['second']." </span><br/>";
echo"<span id='span1'>" . $cartoon['third']. "</span><br/>";
echo"<span id='span1'>" . $cartoon['fourth']. "</span><br/>";




   ?>
</body>
</html>