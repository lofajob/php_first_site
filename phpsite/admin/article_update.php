<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Редактирование урока</title>
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

	if (isset($_POST['title']) && $_POST['title'] !==''){								// проверка и присвоение переменных
		$title = $_POST['title'];	
	}
	if (isset($_POST['author']) && $_POST['author'] !==''){
		$author = $_POST['author'];
	}
	if (isset($_POST['meta_d']) && $_POST['meta_d'] !==''){
		$meta_d = $_POST['meta_d'];
	}
	if (isset($_POST['meta_k']) && $_POST['meta_k'] !==''){
		$meta_k = $_POST['meta_k'];
	}
	if (isset($_POST['date']) && $_POST['date'] !==''){
		$date = $_POST['date'];
	}
	if (isset($_POST['text']) && $_POST['text'] !==''){
		$text = $_POST['text'];
	}
	if (isset($_POST['description']) && $_POST['description'] !==''){
		$description = $_POST['description'];
	}
	if (isset($_POST['id']) && $_POST['id'] !==''){
		$id = $_POST['id'];
	}
	
	//------------------------------------------------ редактирование статьи
	$db = mysql_connect("localhost","php","12345");
	mysql_select_db("phpsite",$db);
	
	if (isset($id) && isset($title) && isset($author) && isset($meta_d) && isset($meta_k) && isset($date) && isset($description) && isset($text)  ){
		$result = mysql_query("UPDATE articles SET title='$title', author='$author', meta_d='$meta_d', meta_k='$meta_k', date='$date', text='$text', description='$description' 
			WHERE id='$id'");
		if ($result){
			echo "<p>Дание обновлены успешно!</p>";
		}
		else
			echo "<p>Возникла ошыбка при обновлении значений.</p>";	
	}
	else {
		echo "<p>Не заполнены все поля!</p>";
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