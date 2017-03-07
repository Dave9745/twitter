<?php
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
    
    var_dump($tel);

    $link = mysql_connect("localhost", "root", "");
    mysql_select_db('exophp', $link);

    $sql = "INSERT INTO users VALUES ('NULL', 'SPARROW', 'Jack', 32, '06 80 65 06 25');";
    $result = mysql_query($sql);

     header('Location:index.php');

    
?>