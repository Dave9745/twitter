<?php
    
    
    $id = $_POST['id'];
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $age  = $_POST['age']; 
    
    var_dump($nom);
    var_dump($prenom);

    $link = mysql_connect("localhost", "root", "");
    mysql_select_db('exophp', $link);

    $sql = "UPDATE users SET nom ='".$nom."', prenom='".$prenom."'WHERE id='".$id."';";
    $result = mysql_query($sql);
    
    while ($row = mysql_fetch_assoc($result)) {

            echo "<ul><li>".$row ['id']." ".$row ['nom']." ".$row ['prenom']." ".$row['age']." ".$row['email']."</a></li></ul>";
    }

?>
