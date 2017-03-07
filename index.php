<?php
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db('exophp', $link);

    $sql = "SELECT * FROM users;";
    $result = mysql_query($sql);
    echo "<ul>";
   // while ($row = mysql_fetch_assoc($result)) {
        
       //echo "<li>".$row['id']."</li>";
                
    //}
    
    echo "</ul>";
?>

