<?php
$m=new MongoClient();
$db=$m->project;
$collection=$db->weight;
session_start();
$item=$_SESSION["item"];
$cursor=$collection->find();
$count=$cursor->count();
  if( $count> 0 )
    {
        foreach ($cursor as $obj)
        {
			if ($obj["idt"] == $item)
			{
				echo'<br /><br /><table border="3">
			<tr><th>biceps:</th><td>'.$obj['bicep'].'</td></tr>			  			<tr><th>chest:</th><td>'.$obj['chest'].'</td></tr>	
			<tr><th>abdomen:</th><td>'.$obj['abs'].'</td></tr>		   						            <tr><th>thighs</th><td>'.$obj['thighs'].'</td></tr>
			<tr><th>weight:</th><td>'.$obj['weight'].'</td></tr>
			<tr><th>years of training:</th><td>'.$obj['years'].'</td></tr>
			<tr><th>COURSEID:</th><td>'.$obj['id'].'</td></tr>
			<tr><th>DATABASEID:</th><td>'.$obj['idt'].'</td></tr>
			</table>';
			}
	
		}
	}
	$cursor=$collection->find();
$count=$cursor->count();
	
	 if( $count> 0 )
    {
        foreach ($cursor as $obj)
        {
			if ($obj["idt"]==$item && $obj["level"]=="BEGINNER")
	{
	echo'<form action="weight1.php" method="post">
	<br><ul>
	 <input type="hidden" name="conf" value="yes"/>
	 <input type="hidden" name="years" value="1"/>
	<input type="submit" value="Weight training routine details:"</ul>';
		}
	elseif ($obj["idt"]==$item && $obj["level"]=="INTERMEDIATE")
	{
	echo'<form action="weight1.php" method="post">
			<br><ul>
	 <input type="hidden" name="conf" value="yes"/>
	 <input type="hidden" name="years" value="2"/>
	<input type="submit" value="Weight training routine details:"</ul>';
	}
	elseif ($obj["idt"]==$item && $obj["level"]=="ADVANCED")
	{
	echo'<form action="weight1.php" method="post">
	<br><ul>
	 <input type="hidden" name="conf" value="yes"/>
	 <input type="hidden" name="years" value="2"/>
	<input type="submit" value="Weight training routine details:"</ul>';
	}
		}
	}
  ?>
