<?php 
// Import data with php method file_get_contents
$data = file_get_contents('./src/dischi.json');
// var_dump($data);

// Disable CORS
header('Access-Control-Allow-Origin: *');
//  (php manual) » Content-Disposition header to supply a recommended filename and force the browser to display the save dialog
header('Content-Type: application/json');
echo $data;
?>
