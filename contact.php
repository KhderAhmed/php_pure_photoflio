<?php include "layouts/navbar.php";
    
?>

<main id="main" data-aos="fade" data-aos-delay="1500">

  <!-- ======= End Page Header ======= -->
  <div class="page-header d-flex align-items-center">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Contact</h2>
          <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a
            odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.
          </p>

        </div>
      </div>
    </div>
  </div><!-- End Page Header -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
<?php     include 'database/env.php';
$contactus = mysqli_query($mysqli, "SELECT * FROM contpages "); 
?>

      <div class="row gy-4 justify-content-center">
      <?php   foreach ($contactus as $key => $row) {
                    ?>
        <div class="col-lg-3">
          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <p> <?php echo $row['loction']; ?></p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3">
          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p><?php echo $row['email']; ?></p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3">
          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p><?php echo $row['phone']; ?></p>
            </div>
          </div>
        </div><!-- End Info Item -->

      </div>

      <?php
                  }
                  ?>
      <div class="row justify-content-center mt-4">


        <div class="col-lg-9">
          <?php
          include 'database/env.php';

          if (isset($_POST['send'])) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];


            if ($email == "" || $name == "" || $subject == "" || $message == "") {
              echo "All fields should be filled. Either one or many fields are empty.";

            } else {
              mysqli_query($mysqli, "INSERT INTO contact(email, name, subject,message) VALUES('$name',  '$email', '$subject', '$message')")
                or die("Could not execute the insert query.");

              echo "Registration successfully";

            }
          } else {
            ?>
            <form method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <input class="form-control" name="message" placeholder="Message" required>
              </div>
              <div class="form-group mt-3">
                <div class="text-center"><button type="submit" name="send">Send Message</button></div>
              </div>

            </form>
          </div>
          <?php
          }
          ?>
        <!-- End Contact Form -->
      </div>

    </div>


  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php include "layouts/footer.php"; ?>