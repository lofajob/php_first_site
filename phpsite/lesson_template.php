<?php 
include("blocks/db/db_l.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta name="description" content="<?php echo $myrow['meta_d']; ?>">
    <meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title><?php echo $myrow['title']; ?></title>
</head>

<body>
    <table width="690" border="0" align="center" bgcolor="#FFFFFF" class="wrapper">
    
    																					<!--header -->
		<?
			include("blocks/header.php");
		?>
      
																						<!--navigatoin -->
		<tr>
      
		<?
	  		include("blocks/sidebar.php"); 
		?>
                  											 							<!--content -->
            <td width="499" valign="top" >
              <p>� ���� ����� ������ ���� �� �������� ����� � ������� 
              Rupay.</p>
                <p>������, ���� � ���� ������� ����������� ��� ��� ������ 
                �����. ��������, �� ������� ��� ������� �������� � ��������� �������� 
              ������, ���������� �������, ��������� ������ �� ����� �������� � ��.</p>
                <p>�������� ������� �������� ����� �� �����:</p>
                <p><strong>1.</strong> �������� �� ������ - <a href="http://ruseller.com/p/rupay.php" target="_blank">������� 
                ���� � Rupay</a></p>
                <p align="center"><img src="lessons/260612/rupay/1.gif" width="212" height="108"></p>
              <p><strong>2.</strong> �� ����������� �������� ����� �� 
              ������ � ������ ����, ��������� �� �������:</p>
                <p align="center"><img src="lessons/260612/rupay/2.gif" width="219" height="98"></p>
                <p><strong>3.</strong> �����, ���������� ��������������� 
                ����� � ����� ������: &quot;�����������&quot;.</p>
                <p align="center"><img src="lessons/260612/rupay/3.gif" width="214" height="91"></p>
                <p><strong>4.</strong> ����, ���� �� ������ ������ �� 
                �� ����� ���������� �����, ������� �� ������ �� ���������. ��������� 
                ���� ����� ���������� ��������� ��������. ��������� �� ���� �� ������� 
                ���� ������� �� ������ &quot;��������� ����&quot;.</p>
                <p align="center"><img src="lessons/260612/rupay/4.gif" width="236" height="86"></p>     
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
