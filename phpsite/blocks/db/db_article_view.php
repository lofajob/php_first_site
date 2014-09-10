<?
	$db = mysql_connect("localhost","php","12345");
	
		if (!$db) {
    		die (sprintf ("Ошибка [%d]: %s", mysql_errno (), mysql_error ()));
			} 
		else {
			mysql_select_db("phpsite",$db);
			
			if (isset($_GET['id'])){
					$id = $_GET['id'];

					$result = mysql_query("SELECT * FROM articles WHERE id='$id'",$db);
					$myrow = mysql_fetch_array($result);
				}
				else{ 
					echo("Ошибка открытия урока!");								//пока не виводить!
				}
		}
?>