<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Добавление урока</title>
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
	if (isset($_POST['author'])){														// еще такой способ, но он менее логичен...
		$author = $_POST['author'];
		if ($author == '') {
			unset($author);
		}
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
	
	//------------------------------------------------ добавление нового урока
	$db = mysql_connect("localhost","php","12345");
	mysql_select_db("phpsite",$db);
	
	if (isset($title) && isset($author) && isset($meta_d) && isset($meta_k) && isset($date) && isset($description) && isset($text)  ){
		$result = mysql_query("INSERT into lessons (title, author, meta_d, meta_k, date, text, description) VAlUES 
			('$title', '$author', '$meta_d', '$meta_k', '$date', '$text', '$description')");
		if ($result){
			echo "<p>Дание добавлены успешно!</p>";
		}
		else
			echo "<p>Возникла ошыбка при добавлении значения.</p>";	
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