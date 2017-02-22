<?php
$m=new MongoClient();
$db=$m->project;
$collection=$db->diet;
session_start();
$item2=$_SESSION["item2"];
$cursor=$collection->find();
$count=$cursor->count();
  if( $count> 0 )
    {
        foreach ($cursor as $obj)
        {
			if ($obj["idt"] == $item2)
			{
				echo'<br /><br /><table border="3">
			<tr><th>height:</th><td>'.$obj['height'].'</td></tr>			  			<tr><th>weight.:</th><td>'.$obj['weight'].'</td></tr>	
			<tr><th>any illness?:</th><td>'.$obj['illness'].'</td></tr>		   			<tr><th>Age:</th><td>'.$obj['age'].'</td></tr>
			<tr><th>diet:</th><td>'.$obj['food'].'</td></tr>
			<tr><th>gender</th><td>'.$obj['gender'].'</td></tr>
			<tr><th>COURSEID:</th><td>'.$obj['id'].'</td></tr>
			<tr><th>DATABASEID:</th><td>'.$obj['idt'].'</td></tr>
			</table>';
			}
	
		}
	}
?>
