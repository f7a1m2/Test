<?php
include ('Connexion.php');

    function getAlldonner($base,$nomTable) {
        $sql = "SELECT * FROM '.$nomTable.'";
        $allDonner = array();
        try {
            $resultat = $base->query($sql);
            $resultat->setFetchMode(PDO::FETCH_OBJ);
        } catch (PDOException $pe) {
            echo $pe;
        }
        return $allDonner;
    }

function getAllProduit($base) {
    $sqlproduit = "SELECT * FROM produit ";
    $allProduit = array();
    try {
        $resultat = $base->query($sqlproduit);
        $resultat->setFetchMode(PDO::FETCH_OBJ);
    } catch (PDOException $pe) {
        echo $pe;
    }
    $i = 0;
    while ($ligne = $resultat->fetch()) {
        $allProduit[$i]['idmarque'] = $ligne->idproduit;
        $allProduit[$i]['idproduit'] = $ligne->idproduit;
        $allProduit[$i]['nomproduit'] = $ligne->nomproduit;
        $allProduit[$i]['prixproduit'] = $ligne->prixproduit;
        $allProduit[$i]['idDisponibiliter'] = $ligne->iddisponibiliter;
        $i++;
    }
    return $allProduit;
}

function getIdProduit($base, $nomProduit) {
    $allProduit = getAllProduit($base);
    for ($i=0; $i < count($allProduit); $i++) { 
        if ($nomProduit == $allProduit[$i]['nomproduit']) {
            $idProduit = $allProduit[$i]['idproduit'];
        }
    }
    return $idProduit;
}
    // function AjoutProduit($base,$nomProduit,$nomMarque,$disponibiliter,$prix){
        
    // }

    // function UpdateProduit($base,$newName,$newMarque,$newDisponibiliter,$newPrix) {
    //     $tabProduit = getAllProduit($base);
    //     for ($i=0; $i < count($tabProduit); $i++) { 
    //         if ($nomProduit == $tabProduit[$i]['nomproduit']) {
    //             $sql = "UPDATE "
    //         }
    //     }
    // } 
?>