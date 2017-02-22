<?php
$m=new MongoClient();
$db=$m->project;
$collection=$db->basic;
$item=$_POST["search"];
$cursor=$collection->find();
$count=$cursor->count();
$id=$_POST["id"];
echo $id;
$flag=1;
if( $count> 0 )
    {
        foreach ($cursor as $obj)
        {
			if($obj["id"]==$id)
			{
				$collection->remove(array("id"=>"$id"));
				$collection1=$db->$obj["ids"];
				$collection1->remove(array("idt"=>"$id"));
				$flag=0;
			} 
		}
	}
	if($flag!=0)
	{
		echo'<h1>RECORD NOT FOUND!!<a href="database.php">click here too 		       see if you are registered or not!!!!</a></h1>';
	}
	else 
	{
		echo'<h1>RECORD DELETED!<a href="database.php">click here to check the database!!!</a></h1>';
	}
	?>
