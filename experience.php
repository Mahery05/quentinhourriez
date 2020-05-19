<?php include('inc/data.inc.php'); ?>
<?php include('inc/header.inc.php'); ?>
<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Experience</h2>
        <?php $result = $pdo->query("SELECT * FROM experience");
          while($experience = $result->fetch(PDO::FETCH_OBJ)) { ?>


        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $experience->nom_experience; ?></h3>
          
            <div class="subheading mb-3"></div>
            <p><?php echo $experience->description_experience; ?></p>
          </div>


          <div class="resume-date text-md-right">
            <span class="text-primary"><?php
            echo $experience->date_experience; ?></span>
          </div>
        </div>
          <?php } ?>


      </div>

    </section>
</div>
<?php include('inc/footer.inc.php'); ?>