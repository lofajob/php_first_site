<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Добавление статьи</title>
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
            <form action="article_add.php" method="post" name="new_lesson" class="form1">
              
                <label>Введите название статьи: <br>
                    <input name="title" type="text" size="50" maxlength="255">            
              </label>        
                <br><br>   
                <label>Введите краткое описание: <br>
                    <input name="meta_d" type="text" size="50" maxlength="255">            
                </label> 
                <br><br>        	    
                <label>Введите ключевие слова: <br>
                    <input name="meta_k" type="text" size="50" maxlength="255">            
                </label> 
                <br><br>
                <label>Введите дату: <br>
                    <input name="date" type="text" value="0000-00-00" size="10" maxlength="10">            
              </label> 
                <br><br>
                <label>Введите автора статьи: <br>
                    <input name="author" type="text" size="50" maxlength="255">            
              </label> 
                <br><br>  
                <label>Введите отрывок статьи (тегами):<br>
                    <textarea name="description" cols="55" rows="5"></textarea>            
              </label> 
                <br>
                <br>    
                <label>Введите текст статьи (с тегами): <br>
                    <textarea name="text" cols="55" rows="10"></textarea>               
                </label> 
                <br>
                <br> 
                <input name="submit" type="submit" class="title" id="submit" value="Добавить статью в базу">
                <br>                      
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
