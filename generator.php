<?php
/* récupérer les données du formulaire en utilisant 
    la valeur des attributs name comme clé 
    */
$aPlayers =  $_POST['names']; 
// afficher le résultat
shuffle($aPlayers);
$aPlayersChunked = array_chunk($aPlayers, 2);
?>
<!DOCTYPE html>
<html lang="fr">
<html>
<?php include_once('./views/head.php'); ?>
<body>
  <?php include_once('./views/banner.php'); ?>
  <?php include_once('./views/result.php'); ?>

</body>
 <?php include_once('./views/footer.php'); ?>
</html>


