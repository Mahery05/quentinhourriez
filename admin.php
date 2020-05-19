<?php include('inc/data.inc.php'); ?>
<?php include('inc/header.inc.php'); ?>

<?php
if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe']== "fromage") { ?>

        <a href="pour_experience.php" ><<button type="submit" class="btn btn-primary">Suprimer</button></a>
        <a href="pour_experience.php" ><<button type="submit" class="btn btn-primary">Suprimer</button></a> <?php
}

else {

    echo '<p> Ce n est pas le bon mot de passe </p>';
} ?>

<?php include('inc/footer.inc.php'); ?>