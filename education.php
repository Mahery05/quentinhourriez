<?php include('inc/data.inc.php'); ?>
<?php include('inc/header.inc.php'); ?>
<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>
        <?php $result = $pdo->query("SELECT * FROM education");
          while($education = $result->fetch(PDO::FETCH_OBJ)) { ?>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $education->nom_ecole; ?></h3>


            <div class="subheading mb-3"></div>
            <div><?php echo $education->description_education; ?></div>
            <p><?php echo $education->titre_education; ?></p>

          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php
            echo $education->date_education; ?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $education->nom_lycee; ?></h3>

            <div class="subheading mb-3"><?php echo $education->description_education_2; ?></div>
            <p><?php echo $education->titre_education_2; ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php
            echo $education->date_education_2; ?></span>
          </div>
        </div>
          <?php } ?>

      </div>
    </section>
</div>
<?php include('inc/footer.inc.php'); ?>