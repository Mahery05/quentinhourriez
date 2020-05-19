<?php include('inc/data.inc.php'); ?>
<?php include('inc/header.inc.php'); ?>

<?php
if (!empty($_POST)) {
    
    $pdo5 = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $_POST["nom1"] = htmlentities($_POST["nom"], ENT_QUOTES);
    $_POST["lieux1"] = htmlentities($_POST["lieux"], ENT_QUOTES);
    $_POST["date1"] = htmlentities($_POST["date"], ENT_QUOTES);
    $_POST["info1"] = htmlentities($_POST["info"], ENT_QUOTES);
    $result = $pdo5->exec("INSERT INTO experiance (nom_stage, entreprise, date_stage, info) VALUES ('$_POST[nom]', '$_POST[lieux]', '$_POST[date]', '$_POST[info]');");

    echo "Donnée(s) Enregister";
    header('Refresh: 0');
    
}


?>
<div class="starter-template">  
    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="titre">Nom du stage</label>
            <input type="text" class="form-control" id="nom" name="nom">
            <label for="titre">Entreprise/Ecole</label>
            <input type="text" class="form-control" id="lieux" name="lieux">
            <label for="titre">Date</label>
            <input type="text" class="form-control" id="date" name="date">
            <label for="titre">Inforamtion</label>
            <input type="text" class="form-control" id="info" name="info">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>
<?php include('inc/footer.inc.php');