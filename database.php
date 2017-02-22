<html>
<style>
body{
	  background-image:url(db.jpg);
	  background-repeat:
	  space;
	  background-size:contain;
	  
}
</style>
<?php
$m=new MongoClient();
$db=$m->project;
$collection=$db->basic;
session_start();
$cursor=$collection->find();
$count=$cursor->count();
  if( $count> 0 )
    {
        foreach ($cursor as $obj)
        {
			echo'<br /><br /><table border="3">
			<tr><th>NAME:</th><td>'.$obj['name'].'</td></tr>			  			<tr><th>contactno.:</th><td>'.$obj['contact'].'</td></tr>	
			<tr><th>Address:</th><td>'.$obj['address'].'</td></tr>		   			<tr><th>Age:</th><td>'.$obj['Age'].'</td></tr>
			<tr><th>email:</th><td>'.$obj['email'].'</td></tr>
			<tr><th>occupation:</th><td>'.$obj['occupation'].'</td></tr>
			<tr><th>Registration-date:</th><td>'.$obj['regdate'].'</td></tr>
			<tr><th>ID:</th><td>'.$obj['id'].'</td></tr>
			<tr><th>Course:</th><td>'.$obj['ids'].'</td></tr>
			</table>';
			
			if($obj["ids"]=="weight")
			{
				$_SESSION["item"]=$obj['id'];
     		     echo '<form action="databasew.php" method="post"><input 				                  type="submit" value="click here to see members weight training course details" /></form>';
			
			
			}
			elseif ($obj["ids"]=="cardio")
			{
				$_SESSION["item1"]=$obj['id']; 
			   echo '<form action="databasec.php" method="post"><input 				                  type="submit" value="click here to see members cardio training course details" /></form>';
			
			}elseif ($obj["ids"]=="diet")
			{
			$_SESSION["item2"]=$obj['id'];
				echo '<form action="databased.php" method="post"><input 				                  type="submit" value="click here to see members diet details" /></form>';
			
		}
	}
	}
	
	?>
