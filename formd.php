<?php
$m=new MongoClient();
$db=$m->project;

$collection=$db->createCollection("basic");
$collection=$db->basic;
$cursor=$collection->find();
$count=$cursor->count();
$collection->update(array("id"=>"$count"),array('$set'=>array("ids"=>"diet")));
$cursor = $collection->find();
echo "Updated document";
header('Location:diet.php');
exit;
?>
