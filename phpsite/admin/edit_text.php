<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Редактирование текстов страниц</title>
</head>

<body>
    <table width="690" border="0" align="center" bgcolor="#FFFFFF" class="wrapper">
                                                                                      	  <!--header -->
        <?
            include("blocks/header.php");
        ?>                                                                                <!--navigation -->
        <tr>
        <?
            include("blocks/sidebar.php"); 
        ?>                                                                                
		<td width="499" valign="top" >
               
 			<?php 
				$db = mysql_connect("localhost","php","12345");							//connect to data base
				
				if (!$db) {
					die (sprintf ("Ошибка [%d]: %s", mysql_errno (), mysql_error ()));
				} 
				else {
					mysql_select_db("phpsite",$db);
					
					if (!isset($_GET['id'])){											//если не нажали на ссылку, выводим список ссылок
						$result = mysql_query("SELECT id, page FROM settings");	
						echo ("<p class='p2'>Выберите страницу для редактирования:</p>");		
						while ($myrow = mysql_fetch_array($result)){					//вывод ссылок
							echo("<p class='lesson_name'>
									<a href='edit_text.php?id=".$myrow['id']."'>Редактирование страницы - ".$myrow['page'].".php</a>
								  </p>");
						}
					}
					else{		
						$result = mysql_query("SELECT * FROM settings WHERE id=$_GET[id]");				
						$myrow = mysql_fetch_array($result);							//вывод формы после нажатия на ссылку
						print(" 
							<form action='text_update.php' method='post' name='new_lesson' class='form1'>
							  
								<label>Введите название страницы: <br>
									<input value='".$myrow['title']."' name='title' type='text' size='50' maxlength='255'>            
								</label>        
								<br><br>   
								<label>Введите краткое описание: <br>
									<input value='".$myrow['meta_d']."' name='meta_d' type='text' size='50' maxlength='255'>            
								</label> 
								<br><br>        	    
								<label>Введите ключевие слова: <br>
									<input value='".$myrow['meta_k']."' name='meta_k' type='text' size='50' maxlength='255'>            
								</label> 
								<br><br>
								<label>Введите текст страницы (с тегами): <br>
									<textarea name='text' cols='55' rows='10'>".$myrow['text']."</textarea>               
								</label> 
								<br>
								<br> 
								<input value='".$myrow['id']."' name='id' type='hidden'>
								<input name='submit' type='submit' class='title' id='submit' value='Редактировать страницу'>
								<br>                      
							</form> ");
					}
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