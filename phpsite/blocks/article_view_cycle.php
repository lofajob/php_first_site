<?php 
					$result = mysql_query("SELECT id, title, description, author, date FROM articles",$db);
                    
                    while ($myrow = mysql_fetch_array($result)){
                        echo ("<table class='article'>
                            <tr class='article_title'>
                                <td>
                                    <p class='article_name'>
                                        <a href='article_view.php?id=".$myrow['id']."'>".$myrow['title']."</a>
                                    </p>
                                    <p class='article_adds'>Дата добавления: ".$myrow['date']."</p>
                                    <p class='article_adds'>Автор статьи: ".$myrow['author']."</p>
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