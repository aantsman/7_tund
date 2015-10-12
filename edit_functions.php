<?php

    require_once("../config_global.php");
    $database = "if15_anniant";
	
	function getSingleCarData($id){
		
		$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["serverusername"], $GLOBALS["serverpassword"], $GLOBALS["database"]);
		$stmt=$mysqli->prepare("SELECT number_plate, color FROM car_plates WHERE id=? AND deleted IS NULL");
		$stmt->bind_param("i", $id);
		$stmt->bind_result($number_plate, $color);
		$stmt->execute();
		
		
		//auto objekt
		$car=new StdClass();
		
		//kas sain rea andmeid
		if($stmt->fetch()){
			
			$car->number_plate=$number_plate;
			$car->color=$color;
			
			
		}else{
			//andmeid ei tulnud, 
			//juhtub kui: id'd polnud v oli kustutatud
			//header("Location: table.php");
			
		}
		
		$stmt->close();
		$mysqli->close();
		
		return $car;
	}

	
	function updateCarData($car_id, $number_plate, $color){
	$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["serverusername"], $GLOBALS["serverpassword"], $GLOBALS["database"]);
		
		
    $stmt = $mysqli->prepare("UPDATE car_plates SET number_plate=?, color=? WHERE id=?");
    $stmt->bind_param("ssi", $number_plate, $color, $car_id);
    $stmt->execute();
		
	//tühjendame aadressirea
	//header("Location:table.php");
		
	$stmt->close();
	$mysqli->close();
		
	}


?>