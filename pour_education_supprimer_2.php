<?php include('inc/data.inc.php'); ?>
<?php include('inc/header.inc.php'); ?>

<?php
$pdo5 = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo5->query("SELECT * FROM education");?>
<div class="starter-template">
<?php
while($education = $result->fetch(PDO::FETCH_OBJ)) {
  

        echo $education->id_education . ".  ";
        echo $education->nom_lycee . " - ";
        echo $education->description_education_2 . " - ";
        echo $education->titre_education_2 . " - ";
        echo $education->date_education_2 . "<br>";
        
}


if (!empty($_POST)) {
    
    
    $_POST["nom_ecole"] = htmlentities($_POST["nom"], ENT_QUOTES);
    $result = $pdo5->exec("DELETE FROM education WHERE nom_ecole = '$_POST[nom_ecole]';");

    echo "Enregister";
    header('Refresh: 0');
   
}


?>

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label class="newlabel" for="titre">Nom du lycee</label>
            <input type="text" class="form-control" id="nom_lycee" name="nom_lycee">

        <button type="submit" class="btn btn-primary">Suprimer</button>

    </form>
    <?php include('inc/footer.inc.php');