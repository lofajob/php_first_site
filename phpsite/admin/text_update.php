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
                
                    if (isset($_POST['title']) && $_POST['title'] !==''){								// �������� � ���������� ����������
                        $title = $_POST['title'];	
                    }
                    if (isset($_POST['meta_d']) && $_POST['meta_d'] !==''){
                        $meta_d = $_POST['meta_d'];
                    }
                    if (isset($_POST['meta_k']) && $_POST['meta_k'] !==''){
                        $meta_k = $_POST['meta_k'];
                    }
                    if (isset($_POST['text']) && $_POST['text'] !==''){
                        $text = $_POST['text'];
                    }
                    if (isset($_POST['id']) && $_POST['id'] !==''){
                        $id = $_POST['id'];
                    }
                    
                    //------------------------------------------------ �������������� ��������
                    $db = mysql_connect("localhost","php","12345");
                    mysql_select_db("phpsite",$db);
                    
                    if (isset($id) && isset($title) && isset($meta_d) && isset($meta_k) && isset($text)  ){
                        $result = mysql_query("UPDATE settings SET title='$title', meta_d='$meta_d', meta_k='$meta_k', text='$text' WHERE id='$id'");
                        if ($result){
                            echo "<p>����� ��������� �������!</p>";
                        }
                        else
                            echo "<p>�������� ������ ��� ���������� ��������.</p>";	
                    }
                    else {
                        echo "<p>�� ��������� ��� ����!</p>";
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