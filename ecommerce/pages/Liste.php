<?php
include ('../inc/Connexion.php');
include ('../inc/Fonction.php');

$tableauProduit = getAllProduit($base);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste produit</title>
</head>
<body>
    <table>
        <tr>
            <td>Nom du produit</td>
            <td>Prix du produit</td>
        </tr>
        <?php for($i=0 ; $i < count($tableauProduit) ; $i++) { ?>
            <tr><?php echo $tableauProduit[$i]['nomproduit'] ?></tr>
            <tr><?php echo $tableauProduit[$i]['prixproduit'] ?></tr>   
            <tr><a href="Ajouter.php?nomproduit=<?php echo $tableauProduit[$i]['nomproduit'] ?>">Ajouter</a></tr> 
        <?php } ?>
    </table>
</body>
</html>