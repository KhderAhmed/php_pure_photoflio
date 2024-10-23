<?php include 'layouts/header.php';

//including the database connection file
include '../database/env.php';

//fetching data in descending order (lastest entry first)
$results = mysqli_query($mysqli, "SELECT * FROM abouts ");
 ?>
<div class="page-content">
  <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">About</h2>
    </div>
  </div>

  <section class="no-padding-top">
    <button type="submit" class="btn btn-primary"><a class="btn btn-primary" href="Create_about.php">Create New
        About</a></button>
    <hr class="font">
 

    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <div class="title"><strong>All About</strong></div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Birthday</th>
                    <th>Website</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>Freelance</th>
                    <th>Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($results as $key => $row) {
                    ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['birthday']; ?></td>
                      <td><?php echo $row['website']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                      <td><?php echo $row['freelance']; ?></td>
                      <td>
                      <a href="edit_about.php?id=<?= $row['id']?>">Edit</a> |||
					
            
                      <a href="delete_about.php?id=<?= $row['id']?>">Delete</a>
					
                    </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>
</div>
</section>

<?php include 'layouts/footer.php'; ?>