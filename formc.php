<?php
$m=new MongoClient();
$db=$m->project;

$collection=$db->createCollection("basic");
$collection=$db->basic;
$cursor=$collection->find();
$count=$cursor->count();
$collection->update(array("id"=>"$count"),array('$set'=>array("ids"=>"cardio")));
$cursor = $collection->find();
echo "Updated document";
foreach ($cursor as $document) {
echo $document["title"] . "\n";
header('Location:cardio.php');
exit;
}
?>
