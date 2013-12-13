<?php
	require_once("class/LoginClass.php");
	
	//Check of de loginformulier velden wel zijn ingevuld
        if (!empty($_POST['email']) && !empty($_POST['password']))
        {
                /* Check in de database of beide ingevoerde waarden in
                * het loginformulier wel bestaan in de login tabel
                * tussen de haakjes van het onderstaand if-statement
                * moet true of false komen te staan. We schrijven daarvoor
				 * een method in de LoginClass class. Een static method uit een
				 * class kan worden aangeroepen met :de naam van de class 
				 * gevolgd door
				 * dubbele dubbele punt, de naam van de method
                */
                
                if(LoginClass::check_if_email_password_exists())
				{
					
				}
                include("connect_db.php");
                $query = "SELECT *
                                  FROM `users`
                                  WHERE `email` = '".$_POST['email']."'
                                  AND        `password` = '".$_POST['password']."'";
                $result = mysql_query($query, $db);
                
                $_SESSION['id']    = $user->getLogin_id();
				$_SESSION['userrole'] = $user->getUserrole();
				
                if (mysql_num_rows($result) > 0)
                {
                        $record = mysql_fetch_array($result);
                        $_SESSION['id'] = $record['id'];
                        $_SESSION['userrole'] = $record['userrole'];
                        
                        switch ($record['userrole'])
                        {
                                case 'customer':
                                        header("location:index.php?content=customer_homepage");
                                        break;
                                case 'admin':
                                        header("location:index.php?content=admin_homepage");
                                        break;
                                case 'root':
                                        header("location :index.php?content=root_homepage");
                                        break;      
								case 'developer':
                                        header("location:index.php?content=developer_homepage");
                                        break;                        
                        }            
                }
                else
                {
                        echo "Gebruikersnaam en/of wachtwoord niet bekent";
                        header("refresh:4; url=index.php?content=login");
                }
        }
        else
        {
                //Stuur door naar login met foutmelding
                echo "U heeft een of meerdere velden niet ingevuld";
                header("refresh:4; url=index.php?content=login");
        }
?>