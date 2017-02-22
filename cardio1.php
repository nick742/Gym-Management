<?php
$m=new MongoClient();
$db=$m->project;
$collection=$db->basic;
$cursor=$collection->find();
$countt=$cursor->count();
$collection=$db->createCollection("cardio");
$collection=$db->cardio;
$cursor=$collection->find();
$count=$cursor->count();
$count=$count+1;
$document = array(
"height" => $_POST["height"],
"weight" => $_POST["weight"],
"ab"=> $_POST["ab"],
"dietician"=> $_POST["dietician"],
"years"=> $_POST["years"],
"gender"=> $_POST["gender"],
"id"=>"$count",
"idt"=>"$countt",
);
$collection->insert($document);
header('Location:intro.php');
  exit;
?>
