<?php
	//het config.php bestand wordt ingesloten in het bestand MySqlDatabaseClass.php
	// zodat we gebruik kunnen maken van de daar gedefinieerde contstanten
	require_once('config/config.php');
	
	//Dit is de class definitie van de MySqlDatabaseClass
	class MySqlDatabaseClass
	{
		//fields
		private $db_connection;
		
		
		//Contructor in PHP heeft altijd dezelfde naam_construct
		public function __construct()
		{
			// Maakt conact met de mysql-server
			$this->db_connection = mysql_connect(SERVERNAME, USERNAME, PASSWORD);
			
			//Selecteer een database
			mysql_select_db(DATABASENAME, $this->db_connection)
			or die('MySqlDatabaseClass: '.mysql_error());
		}
		// dit is een method(function binnen een class) die sql-query's kan afvuren
		//op de database. Het resultaat wordt dan teruggeven door de method
		public function fire_query($query)
		{
			//echo $query;exit();	
			// Stuurt de query die meegegeven is als argument van de functie fire_query
			$result = mysql_query($query, $this->db_connection)
				or die('MySqlDatabaseClass: ty'.mysql_error());
			return $result;
		}
	}
	
	//Maak nu een object (instantie) van de MySqlDatabaseClass
	$database = new MySqlDatabaseClass();
?>