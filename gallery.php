<?php include "layouts/navbar.php";

//including the database connection file
include 'database/env.php';

//fetching data in descending order (lastest entry first)
$gallerys = mysqli_query($mysqli, "SELECT * FROM gallery ");?> ?>

<main id="main" data-aos="fade" data-aos-delay="1500">

  <!-- ======= End Page Header ======= -->
  <div class="page-header d-flex align-items-center">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Nature </h2>
          <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a
            odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.
          </p>

          <a class="cta-btn" href="contact.php">Available for hire</a>

        </div>
      </div>
    </div>
  </div><!-- End Page Header -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container-fluid">

      <div class="row gy-4 justify-content-center">
        <?php foreach ($gallerys as $row) { ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=" back/<?= $row['images'] ?>" class="img-fluid" alt="">
            
            </div>
          </div><!-- End Gallery Item -->
         
          <?php
        }
        ?>
      </div>

    </div>
  </section><!-- End Gallery Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<?php include "layouts/footer.php"; ?>