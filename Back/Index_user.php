<?php include 'layouts/header.php';

//including the database connection file
include '../database/env.php';

//fetching data in descending order (lastest entry first)
$users = mysqli_query($mysqli, "SELECT * FROM users "); ?>
<div class="page-content">
  <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom"> Customers</h2>
    </div>
  </div>

  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <div class="block margin-bottom-sm">
            <div class="title"><strong>All Customers</strong></div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Created_at</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $key => $row) {
                    ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['date_added']; ?></td>

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