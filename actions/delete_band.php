<?php 
session_start();

// Read file into array
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
unset($lines[$_GET['linenum']]);

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
	'text' => 'Your band has been deleted.',
	'type' => 'error'
);

header('Location:../?p=list_bands');

?>