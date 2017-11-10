<?php
	$conexion= mysql_connect("localhost","root","");

	mysql_select_db("tfg/tablas",$conexion);
	
	$r = "<select>";	

	$resultat = mysql_query("SELECT * FROM poblaciones",$conexion) or die("<h2>Error buscant</h2>");
	

	$rows = mysql_num_rows($resultat);
	if($rows > 0) {
		while($row = mysql_fetch_assoc($resultat)){ 
		
			$r .= "<option value='".$row['Id']."'>".$row['Poblacion']."</option>";
			
		}
		
		$r .= "</select>";
		echo $r;
	
	}else{
		echo "error al carregar poblacions";
	}

?>