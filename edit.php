<?php
	//EDIT.PHP
	require_once("edit_functions.php");

	
	
	//kasutaja muudab andmeid
	if(isset($_GET["update"])){
		
	//auto id, auto nr, auto v�rv
	updateCarData($_GET["car_id"], $_GET["number_plate"], $_GET["color"]);
	}
	
	
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

<!--salvestamiseks kasutan table php rida 15 ja updateCar  -->
<form action="edit.php" method="get">

	<input name="car_id" type="hidden" value="<?=$_GET["edit_id"];?>">
	<input name="number_plate" type="text" value="<?=$car->number_plate;?>"><br>
	<input name="color" type="text" value="<?=$car->color;?>"><br>
	<input name="update" type="submit">
	
</form>
