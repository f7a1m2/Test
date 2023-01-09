<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../assets/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap-4.4.1-dist/css/bootstrap-grid.min.css">
    <title>Ajouter produit</title>
</head>
<body>
    <div class="card-body" id="new_produit">
        <h5 class="card-title">Entrer un nouveau produit</h5>
            <div class="row justify-content-around">
                <div class="col-5" id="v">
                    <form action="../inc/AjouterProduit.php" method="get">
                        <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nom" placeholder="Nom du produit" required>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="marque">
                                <?php for ($i=0; $i < count($tabMarque) ; $i++) { ?>
                                    <option selected><?php echo $tabMarque[$i]['nomMarque']; ?></option>
                                <?php } ?> 
                            </select>
                        </div> 
                        <div class="form-floating mb-3">
                            <select class="form-control" name="disponibiliter">
                                <?php for ($i=0; $i < count($tabvalidation) ; $i++) { ?>
                                    <option selected><?php echo $tabvalidation[$i]['nom']; ?></option>
                                <?php } ?> 
                            </select>
                        </div> 
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="prix" placeholder="Entrer le prix" required>
                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" class="btn btn-primary" value="Valider">
                        </div> 
                    </form>
                </div>
            </div>
    </div>
</body>
</html>