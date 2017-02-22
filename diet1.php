<?php
session_start();
$m=new MongoClient();
$db=$m->project;
$collection=$db->basic;
$cursor=$collection->find();
$countt=$cursor->count();
$collection=$db->createCollection("diet");
$collection=$db->diet;
$cursor=$collection->find();
$count=$cursor->count();
$count=$count+1;

if ($_POST["course"]=="WEIGHT")
{
	$i_d=$_SESSION["i_d"];
}
$flag=1;
if( $count> 0 )
   				 {
        				foreach ($cursor as $obj)
        			{
           			 	if($obj["idt"] ==$i_d)
						$flag=0;
						echo $flag;
					}
				 }
				 
if(flag!=0)
{
$document = array(
"height" => $_POST["height"],
"weight" => $_POST["weight"],
"age"=> $_POST["weight"],
"gender"=> $_POST["gender"],
"food"=> $_POST["food"],
"illness"=> $_POST["illness"],
"course"=>$_POST["course"],
"id"=>"$count",
"idt"=>"$countt",
);
$collection->insert($document);
}
$height=$_POST["height"];
$weight=$_POST["weight"];
$age=$_POST["age"];
if($_POST["course"]=="weight")
{
	$BMI=$weight/($height*$height);
	$BMR= (9.99 * $weight)+(6.25 * ($height*100))- (4.92                 *$age)+5;
	$BMR1=$BMR *1.4;
	$BMR2=$BMR *1.6;
	$BMR3=$BMR *1.8;
	$BMR4=$BMR1  +500;
	$BMR5=$BMR2  +500;
	$BMR6=$BMR3 +500;
	$p=2.2*$weight;
	$f=1.5*$weight;	
	$c=3*2.2*$weight;
}
elseif($_POST["course"]=="cardio")
{
	$BMI=$weight/($height*$height);
	$BMR= (9.99 * $weight)+(6.25 * ($height*100))- (4.92                 *$age)+5;
	$BMR1=$BMR *1.4;
	$BMR2=$BMR *1.6;
	$BMR3=$BMR *1.8;
	$BMR4=$BMR1	-500;
	$BMR5=$BMR2 -500;
	$BMR6=$BMR3 -500;
		
	
	$f=1*$weight;	
	$c=2*2.2*$weight;
	$p=1.5*$weight;
}
echo $height;
echo $weight;

echo'<html><body><table border="1">
	<tr><td>your bmi:</td><td>'.$BMI.'</td></tr>
	<tr><td>TOTAL CALORIES BURNEDIN A DAY:</td><td>'.$BMR1.'FOR BEGINNERS<br />'.$BMR2.'FOR INTERMEDIATE<br />'.$BMR3.'FOR ADVANCED</td></tr>
	<tr><td>Calories required to achieve Goal:</td><td>'.$BMR4.'FOR BEGINNERS<br />'.$BMR5.'FOR INTERMEDIATE<br />'.$BMR6.'FOR ADVANCED</td></tr>
<tr><Td>protein required(g)</td><td>:'.$p.'</td></tr>
<tr><Td>fats required(g)</td><td>:'.$f.'</td></tr>
<tr><Td>carbs required(g)</td><td>:'.$c.'</td></tr>
</table>
</body>
</html>
<a href="intro.php"> HOME</a>;
';
?>
