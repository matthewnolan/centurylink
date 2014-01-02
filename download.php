<?php 
$directory = "/pdf";
$filename = $_GET['fname'];
echo $filename;
$files = explode('/',$filename);
$count = count($files);
$file = $files[$count  - 1];
$path = dirname(__FILE__).$directory.'/'.$filename;
if(file_exists($path)){
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename={$file}");
	readfile($path);
}
?>