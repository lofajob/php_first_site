<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>�������������� �����</title>
</head>

<body>
    <table width="690" border="0" align="center" bgcolor="#FFFFFF" class="wrapper">
                                                                                        <!--header -->
        <?
            include("blocks/header.php");
        ?>
                                                                                        <!--navigation -->
        <tr>
        <?
            include("blocks/sidebar.php"); 
        ?>
                                                                                        
            <td width="499" valign="top" >
<?php 
	if (isset($_POST['id']) && $_POST['id'] !==''){
		$id = $_POST['id'];
	}
	
	//------------------------------------------------ �������� �����
	$db = mysql_connect("localhost","php","12345");
	mysql_select_db("phpsite",$db);
	
	if (isset($id)){
		$result = mysql_query("DELETE FROM lessons WHERE id='$id'");
		if ($result){
			echo "<p>���� ������!</p>";
		}
		else
			echo "<p>�������� ������ ��� �������� �����.</p>";	
	}
	else {
		echo "<p>�� �� ������� ���� ��� ��������!</p>";
	}	
?>
        </td>
        </tr>
        </table>
        </td>
        </tr>
                                                                                        <!--footer -->
        <?
            include("blocks/footer.php");
        ?>
        
    </table>

</body>
</html>