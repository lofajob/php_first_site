<?
	$db = mysql_connect("localhost","php","12345");
	
		if (!$db) {
    		die (sprintf ("Ошибка [%d]: %s", mysql_errno (), mysql_error ()));
			} 
		else {
			mysql_select_db("phpsite",$db);
			$result = mysql_query("SELECT title, meta_d, meta_k, text FROM settings WHERE page='contacts'");
			$myrow = mysql_fetch_array($result);
		}
?>