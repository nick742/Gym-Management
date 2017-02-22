<?php
$m=new MongoClient();
$db=$m->project;

$collection=$db->createCollection("basic");
$collection=$db->basic;
$collection->update(array("id"=>""), array('$set'=>array("id"=>"weight")));
$cursor = $collection->find();
echo "Updated document";
foreach ($cursor as $document) {
echo $document["title"] . "\n";
}
?>
