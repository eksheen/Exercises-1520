<?php
$formName = $_POST["name"];
$writeName = rtrim($formName);
$searchName = $writeName;
$handle = fopen('names.txt', 'a+');
$valid = false;
	while (($buffer = fgets($handle)) !== false) {
		if (strpos($buffer, $searchName) !== false) {
			$valid = TRUE;
        echo $writeName . ", you've already registered.";
			break;
		}
	}	
if($valid === false) {
	echo $writeName . " congratulations you've registered!";
	fwrite($handle, $writeName);  
}
fclose($handle);

?>