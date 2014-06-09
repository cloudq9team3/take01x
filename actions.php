<?php
$m = new MongoClient( 'mongodb://localhost:48103');
$cursor = $m->tem->users->find( array( 'name' => 'marat'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
