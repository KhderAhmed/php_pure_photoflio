<?php include 'layouts/header.php'; ?>


<div class="page-content">
  <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">New About</h2>
    </div>
  </div>


  <div class="col-lg-12">
    <div class="block">
      <div class="title"><strong>Create New About</strong></div>
      <div class="block-body">

        <?php
        include '../database/env.php';

        if (isset($_POST['add'])) {
          $birthday = $_POST['birthday'];
          $website = $_POST['website'];
          $phone = $_POST['phone'];
          $city = $_POST['city'];
          $age = $_POST['age'];
          $freelance = $_POST['freelance'];



          if ($birthday == "" || $website == "" || $phone == "" || $city == "" || $age == "" || $freelance == "") {
            echo "All fields should be filled. Either one or many fields are empty.";
            echo "<br/>";

          } else {
            mysqli_query($mysqli, "INSERT INTO abouts(birthday, website, phone, city,age,freelance) 
            VALUES ('$birthday','$website','$phone', '$city', '$age', '$freelance')")
              or die("Could not execute the insert query.");

            echo "Registration successfully";
            echo "<br/>";

          }
        } else {
          ?>
          <form method="post">
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Birthday</label>
              <div class="col-sm-9">
                <input name="birthday" type="date" class="form-control">
              </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Website</label>
              <div class="col-sm-9">
                <input type="text" name="website" class="form-control">
              </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Phone</label>
              <div class="col-sm-9">
                <input type="number" name="phone" class="form-control">
              </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">City</label>
              <div class="col-sm-9">
                <input type="text" name="city" class="form-control">
              </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Age</label>
              <div class="col-sm-9">
                <input type="text" name="age" class="form-control">
              </div>
            </div>
            <div class="line"></div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Freelance</label>
              <div class="col-sm-9">
                <input type="text" name="freelance" class="form-control">
              </div>
            </div>
        </div>

      </div>
    </div>
    <div class="line"></div>

    <div class="line"></div>
    <div class="form-group row">
      <div class="col-sm-9 ml-auto">
        <button type="submit" class="btn btn-secondary">Cancel</button>
        <button name="add" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>

    </form>
    <?php
        }
        ?>
</div>
</div>
</div>
<?php include 'layouts/footer.php'; ?>