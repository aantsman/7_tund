<?php
	//EDIT.PHP
	require_once("edit_functions.php");

	
	if(isset($_GET["edit_id"])){
		//tr�kin aadressirealt muutuja
		echo $_GET["edit_id"];
		
		//k�sin andmed
		$car=getSingleCarData($_GET["edit_id"]);
		var_dump($car);
		
		
	}else{
		//kui muutujat ei ole, pole m�tet siia lehele tulla
		//header("location: table.php");
		
	}
?>

<form>

	<input name="id" type="hidden">
	<input name="car_plate" type="text"><br>
	<input name="color" type="text"><br>
	<input name="submit "type="submit">
</form>