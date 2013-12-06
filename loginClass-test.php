Dit is de LoginClass-test pagina </h3>
<?php
	//voeg het bestand loginclass.php in require_once("LoginClass.php");

	$login = new LoginClass();
	
	$query = "SELECT * FROM `login`";
	
	$result = $login->find_by_sql($query);
	
	foreach ($result as $value)
	{
		echo $value->login_id."<br>";
			 $value->email."<br>";
	}
?>
