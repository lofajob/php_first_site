<?php 
include("blocks/db/db_i.php");															//Connect to database														
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
																						<!--navigation -->
		<tr>
		<?
	  		include("blocks/sidebar.php"); 
		?>
                  											 							<!--content -->
       		<td width="499" >
				<?php echo $myrow['text']; ?>                       
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
