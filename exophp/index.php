<?php
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db('exophp', $link);

    $sql = "SELECT * FROM users;";
    $result = mysql_query($sql);
    echo "<ul>";
    while ($row = mysql_fetch_assoc($result)) {
        
        echo "<li><a href='details.php?id=".$row ['id']."'>".$row ['nom']."</a></li>";
                
    }
    
    echo "</ul><br/><br/>";
?>
    <a href="newuser.php"><input type="button" name="add" value="+ Ajouter user"/></a>
