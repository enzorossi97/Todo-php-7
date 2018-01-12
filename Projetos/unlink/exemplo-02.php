<?php 

if (! is_dir("fotos")) mkdir("fotos");

foreach (scandir("fotos") as $item) {
	if (!in_array($item, array(".", ".."))) {
		
		unlink("fotos/" .$item);
	}
}


 ?>
