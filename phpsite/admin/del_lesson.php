<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Удаление урока</title>
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
                <form action="lesson_delete.php" method="post" name="new_lesson" class="form1">             
                    <?php 
                        $db = mysql_connect("localhost","php","12345");
                        mysql_select_db("phpsite",$db);
                        
                        $result = mysql_query("SELECT id, title FROM lessons");
						echo ("<p class='p2'>Выберите урок для удаления:</p>");
                        while ($myrow = mysql_fetch_array($result)){
                            echo("<p class='lesson_name'><label><input name='id' type='radio' value='".$myrow['id']."'>".$myrow['title']."</label></p>");
                        }
                    ?>
                    <p>
                    	<input name="submit" type="submit" class="title" id="submit" value="Удалить урок">
                    </p>
                                         
                </form>                   
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
