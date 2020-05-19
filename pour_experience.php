<?php include('inc/data.inc.php'); ?>
<?php include('inc/header.inc.php'); ?>

<?php 

if(!empty($_POST)) {
    $pdo = new PDO("mysql:host=localhost;dbname=cv", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $_POST["nom"] = htmlentities($_POST["nom"], ENT_QUOTES);
    $_POST["description_experience"] = htmlentities($_POST["description_experience"], ENT_QUOTES);
    $_POST["date_experience"] = htmlentities($_POST["date_experience"], ENT_QUOTES);

    echo "Enregistrer les données";
    header('Refresh: 0');

} ?>

<div class="starter-template">
  <form method="POST" action="" enctype="multipart/form-data">

     <div class="form-group">
       <label for="titre">Nom</label>
       <input type="text" class="control" id="nom_experience" name="nom_experience">
       <label for="titre">Description</label>
       <input type="text" class="control" id="description_experience" name="description_experience">
       <label for="titre">Date</label>
       <input type="text" class="control" id="date_experience" name="date_experience">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
    <?php include('inc/footer.inc.php'); ?>