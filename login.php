<?php
$m=new MongoClient();
$db=$m->project;
$collection=$db->login;
$query=array("id"=>$_POST["id"],
"password"=>$_POST["password"],
);
$cursor=$collection->find($query);
$count=$cursor->count();
if($count>0)
{
echo "true logging in in 2 seconds!!!";
header('Location:session.php');
}
else
header('Location:loginno.php');
exit;
?>
