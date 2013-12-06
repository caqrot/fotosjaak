// maak een class me de naam loginclass
// maak net zoveel fields aan  als er velden in de databasezijn
// maak een contructor

<?php
	require_once('MySqlDatabaseClass.php');
	
	
	//Dit is de class-definitie van de LoginClass
	class LoginClass

	{
		//Fields
		private $login_id;
		private $email;
		private $password;
		private $userrole;
		private $isactivated;
		private $register_date;
	
	
		// De contructor van de LoginClass
		public function _contructor()
	{
		
	}
	
		//Method find_by_sql
		public function find_by_sql($query)
		{
			//global zorgt ervoor dat $databse ook binnen de find_by_sql
			//haakjes bekent is.
			global $database;
			
			//Roep de fire_query method met het $database object
			$result = $database->fire_query($sql);
			// Dit is een array. Dit array bevat LoginClass objecten
			$object_array = array();
			
			// Met deze while-lus vullen we het $object-array met LoginClass-objecten
			while ($row = mysql_fetch_array($result))
			{
				$object = LoginClass();
				$this->login_id = $row['login_id'];
				$this->email = $row['email'];
				$this->userrole = $row['userrole'];
				$this->password= $row['password'];
				$this->isactivated= $row['isactivated'];
				$this->registerdate= $row['registerdate'];
				
				
				$object_array[] = $object;
			}
			return object_array;
		}
	}
?>