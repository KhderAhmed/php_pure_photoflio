
<?php include "layouts/navbar.php";   


//including the database connection file
include 'database/env.php';

//fetching data in descending order (lastest entry first)
$homeimage = mysqli_query($mysqli, "SELECT * FROM homeimage ");?> 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>I'm <span>Jenny Wilson</span> a Professional Photographer from New York City</h2>
          <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui libero. Qui voluptas amet.</p>
          <a href="contact.php" class="btn-get-started">Available for hire</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

      <div class="row gy-4 justify-content-center">
        <?php foreach ($homeimage as $row) { ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=" back/<?= $row['image'] ?>" class="img-fluid" alt="">
            
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
 

  <?php include "layouts/footer.php";            ?>
