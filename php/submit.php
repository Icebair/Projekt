<?php
	if (isset($_POST["operation"])){
		if ($_POST["operation"] == "addfilm"){
			echo $_POST["operation"].",".$_POST["name"].",".$_POST["art"].",".$_POST["nickname"];
			$myFile = "../resources/filme.csv";
			$fh = fopen($myFile, $_POST["operation"].",".$_POST["name"].",".$_POST["art"].",".$_POST["nickname"])
				or die("can't open file");
			$dateNow = new DateTime('NOW');
			$stringData = $_POST["operation"].";".$_POST["name"].";".$_POST["art"].";".$_POST["nickname"].";".$dateNow->format('Y-m-d H:i:s')."\n";
			fwrite($fh, $stringData);
			fclose($fh);
		}
	}
?>