<?php 

$titre = "Accueil";

ob_start();

?>

<?php 
    
    foreach($colonnes as $colonne){
        
    
           $managerone = new TachesManager();
           $taches = $managerone->getTasks($colonne->getId());

           foreach($taches as $tache){
?>
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo $tache->getNom(); ?>
                        <p>
                        <form>
                        <select>
                            <option value="">A faire</option>
                            <option value="" selected="selected">En cours</option>
                            <option value="">Terminee</option>
                            <option value="">Bugs / Retours</option>
                        </select>
                        </form>
                    </div>
                </div>
            
<?php
           }
        }

?>


<?php

$contenu = ob_get_clean();

require ('gab.php');

?>