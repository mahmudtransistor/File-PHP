<?php
include('connection.php');

$query = 'select * from test';
$result = mysql_query($query)or die(mysql_error());

$data = array();
while($row = mysql_fetch_object($result)){
	$data['test'][]= $row;
}
echo json_encode($data);
?>