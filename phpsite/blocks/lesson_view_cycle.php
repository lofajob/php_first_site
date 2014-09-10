<?php 																					//show lessons

	$result = mysql_query("SELECT id, title, description, date, author FROM lessons",$db);
	
	while($myrow = mysql_fetch_array($result)){
		echo("<table class='lesson'>
		
			<tr class='lesson_title'>
				<td>
					<p class='lesson_name'>
						<a href='lesson_view.php?id=".$myrow['id']."'>".$myrow['title']."</a>
					</p>
					<p class='lesson_adds'>Дата добавления: ".$myrow['date']."</p>
					<p class='lesson_adds'>Автор урока: ".$myrow['author']."</p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p>".$myrow['description']."</p>
				</td>
			</tr>
			</table>");
	}				
?>		