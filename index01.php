<!DOCTYPE html>
<html>
	<head>
		<title>
			Mijn eerste site
		</title>
	</head>
	<body>
		<!-- Deze regel wil ik niet in mijn browser scherm zien. Het is commentaar -->
		<?php
		/*echo "Dit is mijn eerste php regel<br>"; 
		  echo "Dit is mijn tweede php regel<br>";
		  echo "Dit is mijn derde php regel<br>";	*/		
		$naam = 'Arjan';
		echo "Mijn naam is: ".$naam."<br>";
		$getal1 = 10;
		$getal2 = 23;
		echo "<h3>Optellen</h3>";
		$som = $getal1 + $getal2;
		$verschil = $getal1 - $getal2;
		$product = $getal1 * $getal2;
		$quotient = $getal1 / $getal2;
		echo $getal1." + ".$getal2." = ".$som."<br>";
		echo "$getal1 + $getal2 = $som<br>";
		echo '$getal1 + $getal2 = $som<br>';
		echo "<h3>Aftrekken</h3>";
		echo $getal1." - ".$getal2." = ".$verschil."<br>";
		echo "<h3>Vermenigvuldigen</h3>";
		echo $getal1." x ".$getal2." = ".$product."<br>";
		echo "<h3>Delen</h3>";
		echo $getal1." / ".$getal2." = ".round($quotient,2)."<br>";
		
		?>
		Hallo Wereld!
	</body>
</html>