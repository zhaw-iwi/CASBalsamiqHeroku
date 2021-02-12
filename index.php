<?

$files = glob(dirname(__FILE__) . "/*.pdf");

print_r $files;

/** if (count($files) == 1) {
	header($files[0]);
} else {
	println("Achtung, keine oder mehr als eine PDF Datei :-(");
	println($files);
}*/

?>