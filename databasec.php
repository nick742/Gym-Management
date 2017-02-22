<?php
$m=new MongoClient();
$db=$m->project;
$collection=$db->cardio;
session_start();
$item=$_SESSION["item1"];
echo $item;
$cursor=$collection->find();
$count=$cursor->count();
  if( $count> 0 )
    {
        foreach ($cursor as $obj)
        {
			if ($obj["idt"] == $item)
			{
				echo'<br /><br /><table border="3">
			<tr><th>height:</th><td>'.$obj['height'].'</td></tr>			  			<tr><th>weight.:</th><td>'.$obj['weight'].'</td></tr>	
			<tr><th>abdomen:</th><td>'.$obj['ab'].'</td></tr>		   			<tr><th>Age:</th><td>'.$obj['Age'].'</td></tr>
			<tr><th>dietician:</th><td>'.$obj['dietician'].'</td></tr>
			<tr><th>years:</th><td>'.$obj['years'].'</td></tr>
			<tr><th>gender</th><td>'.$obj['gender'].'</td></tr>
			<tr><th>COURSEID:</th><td>'.$obj['id'].'</td></tr>
			<tr><th>DATABASEID:</th><td>'.$obj['idt'].'</td></tr>
			</table>';
			}
	
		}
	}
?>
