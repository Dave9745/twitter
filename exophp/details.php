<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    
    <?php
    
    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        
        $link = mysql_connect("localhost", "root", "");
        mysql_select_db('exophp', $link);

        $sql = "SELECT * FROM users WHERE id='".$id."';";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {

            echo "<ul><li>".$row ['id']." ".$row ['nom']." ".$row ['prenom']." ".$row['age']." ".$row['tel']."</a></li></ul>";
            
            echo "<form action='traitement.php' method='post'>
                    <div>
                        <input type='hidden' name='id' value=".$row ['id'].">
                    </div>
                    <div>
                        <label for='nom'>Nom :</label>
                        <input type='text' name='nom' value=".$row ['nom'].">
                    </div>
                     <div>
                        <label for='prenom'>Prénom :</label>
                        <input type='text' name='prenom' value=".$row ['prenom'].">
                    </div>
                     <div>
                        <label for='age'>Age :</label>
                        <input type='text' name='age' value=".$row['age'].">
                    </div>

                    <div class='button'>
                        <button type='submit'>Send</button>
                    </div>
                </form><br/><br/>";

        }

        
    }
        
         
    ?>
    
       
    
    
    
</body>
</html>
