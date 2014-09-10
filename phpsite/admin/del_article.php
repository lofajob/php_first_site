<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Удаление статьи</title>
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
                <form action="article_delete.php" method="post" name="new_lesson" class="form1">             
                    <?php 
                        $db = mysql_connect("localhost","php","12345");
                        mysql_select_db("phpsite",$db);
                        
                        $result = mysql_query("SELECT id, title FROM articles");
						echo ("<p class='p2'>Выберите статью для удаления:</p>");	
                        while ($myrow = mysql_fetch_array($result)){
                            echo("<p class='article_name'><label><input name='id' type='radio' value='".$myrow['id']."'>".$myrow['title']."</label></p>");
                        }
                    ?>
                    <p>
                    	<input name="submit" type="submit" class="title" id="submit" value="Удалить статью">
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
