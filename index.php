<?php include('inc/data.inc.php'); ?>
<?php include('inc/header.inc.php'); ?>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          $about = $result->fetch(PDO::FETCH_OBJ);
          
          
         echo $about->nom; ?>


          <span class="text-primary">
          <?php echo $about->prenom; ?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $about->adresse; ?>
        <div class="subheading mb-5"><?php echo $about->code_postal; ?></div>
        <div class="subheading mb-5"><?php echo $about->numero_telephone; ?></div>
        <div class="subheading mb-5"><?php echo $about->date_naissance; ?></div>
          <a href="mailto:name@email.com"><?php echo $about->email; ?></a>
        </div>



        <p class="lead mb-5"><?php echo $about->information; ?></p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/mahery-razakandraina-7548b1198/">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://app.circleci.com/projects/project-dashboard/github/Mahery05">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://twitter.com/MaheryRazaka">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/maherydijo.razakandraina">
            <i class="fab fa-facebook-f"></i>  
          </a>
          <a href="https://www.instagram.com/mahery_r/?hl=fr">
            <i class="fab fa-instagram">
        </div>
      </div>
    </section>
<?php include('inc/footer.inc.php')