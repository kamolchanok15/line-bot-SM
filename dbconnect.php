<?php
header("content-type:application/json");
//$jsondata = file_get_contents("https://ampizz.000webhostapp.com/show.php");

//echo $jsondata

// Read JSON Decode //
    $jsonCode = file_get_contents("https://ampizz.000webhostapp.com/show.php");
	$jsonDecode = json_decode($jsonCode, true);

	foreach ($jsonDecode as $objResult)
	{
		echo $objResult["id"]." ";
		echo $objResult["temp"]." ";
		echo $objResult["humidity"]." ";
		echo $objResult["date"]." ";
	}

?>
