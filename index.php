<?

$files = glob(dirname(__FILE__) . "/*.pdf");

print_r($files);
print(count($files));

if (count($files) == 1) {
	$url = 'http://'.$_SERVER['HTTP_HOST'];
	$filename = basename($files[0]);
	header("Location: " . $url . "/" . $filename);
} else {
	println("Achtung, keine oder mehr als eine PDF Datei :-(");
	println($files);
}

?>