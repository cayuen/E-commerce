<?php
	$cityState = array fgetcsv(resource $handle [, int$length = 0 [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]]] ))
	$zip = $_GET["zip"];]
	if (array_key_exists($zip, $cityState))
		print $cityState[$zip];
	else
		print " , ";


?>



/*
	$row = 1;
	if (($handle = fopen("../csv/zip_codes.csv", "r")) !== FALSE) {
    		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$cityState = array fgetcsv(resource $handle [, int $length = 0 [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]]] )
			$zip = $_GET["zip"];]
        		$num = count($data);
			if (array_key_exists($zip, $cityState))
				print $cityState[$zip];
			else
				print " , ";

        		echo "<p> $num fields in line $row: <br /></p>\n";
        		$row++;
        		for ($c=0; $c < $num; $c++) {
            			echo $data[$c] . "<br />\n";
        	}
    	}
    	fclose($handle);
}
*/