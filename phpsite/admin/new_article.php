<?php 
	include("lock.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">  
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>���������� ������</title>
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
              
                <label>������� �������� ������: <br>
                    <input name="title" type="text" size="50" maxlength="255">            
              </label>        
                <br><br>   
                <label>������� ������� ��������: <br>
                    <input name="meta_d" type="text" size="50" maxlength="255">            
                </label> 
                <br><br>        	    
                <label>������� �������� �����: <br>
                    <input name="meta_k" type="text" size="50" maxlength="255">            
                </label> 
                <br><br>
                <label>������� ����: <br>
                    <input name="date" type="text" value="0000-00-00" size="10" maxlength="10">            
              </label> 
                <br><br>
                <label>������� ������ ������: <br>
                    <input name="author" type="text" size="50" maxlength="255">            
              </label> 
                <br><br>  
                <label>������� ������� ������ (������):<br>
                    <textarea name="description" cols="55" rows="5"></textarea>            
              </label> 
                <br>
                <br>    
                <label>������� ����� ������ (� ������): <br>
                    <textarea name="text" cols="55" rows="10"></textarea>               
                </label> 
                <br>
                <br> 
                <input name="submit" type="submit" class="title" id="submit" value="�������� ������ � ����">
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
