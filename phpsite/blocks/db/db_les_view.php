<?
	$db = mysql_connect("localhost","php","12345");
	
		if (!$db) {
    		die (sprintf ("������ [%d]: %s", mysql_errno (), mysql_error ()));
			} 
		else {
			mysql_select_db("phpsite",$db);
			
			if (isset($_GET['id'])){
					$id = $_GET['id'];

					$result = mysql_query("SELECT * FROM lessons WHERE id='$id'",$db);
					$myrow = mysql_fetch_array($result);
				}
				else{ 
					echo("������ �������� �����!");								//���� �� ��������!
				}
		}
?>