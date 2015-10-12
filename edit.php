<?php
	//EDIT.PHP
	require_once("edit_functions.php");

	
	if(isset($_GET["edit_id"])){
		//trükin aadressirealt muutuja
		echo $_GET["edit_id"];
		
		//küsin andmed
		$car=getSingleCarData($_GET["edit_id"]);
		var_dump($car);
		
		
	}else{
		//kui muutujat ei ole, pole mõtet siia lehele tulla
		//header("location: table.php");
		
	}
?>
<!--salvestamiseks kasutan table php rida 15 ja updateCar  -->
<form action="table.php" method="get">

	<input name="car_id" type="hidden" value="<?=$_GET["edit_id"];?>">
	<input name="number_plate" type="text" value="<?=$car->number_plate;?>"><br>
	<input name="color" type="text" value="<?=$car->color;?>"><br>
	<input name="update" type="submit">
	
</form>
