<!DOCTYPE html>
<html>
<head>
	<title> PHPPRACTICAL </title>
</head>
<body>

<?php

function student($name, $age, $grade){
	echo $name;
	echo $age;
	echo $grade;
}
$a= "jael"."<br>";
$b= 12 . "<br>";
$c = "Garde 12";
echo student($a , $b ,$c);

 echo "<br>";
 /*
 $username = "jael";
 $password= "34567";
 if ($username == "jael"  && $password == "34567"){
	 header("location : dashboard.php");
	 exit();
 }
 else{
	 echo "Your details are incorrect";
 }
 
  echo "<br>";
  */
  $string="TSHIBANGU";
  $space = trim($string);
  echo $space."<br>";
  $lower= strtolower($string);
  echo $lower;
 
  echo "<br>";
  
  $movies = array(array("Movie Title"=>"jael" , "release Year"=>2001, "Genre"=>"Drama" ),
			array("Movie Title"=>"Game" , "release Year"=>2021, "Genre"=>"Comedy" ),
			array("Movie Title"=>"Woof" , "release Year"=>2011, "Genre"=>"Comedy" ));
 foreach($movies as $a){
	 foreach($a as $x=> $y){

		 echo "$x : $y <br>";
	 }
	 echo "$a : $x <br>";
 }

 echo "<br>";
 
 
 function calculateRectangle($l, $w){
	 $area= $l * $w;
	 return $area;
 }
 $length = 2 ;
 $width = 3;
 $calculateArea=calculateRectangle($length , $width);
 echo $calculateArea;
 
 
?>

</body>
</html>