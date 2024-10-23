
<?php include 'layouts/header.php';  

//including the database connection file
include '../database/env.php';

//fetching data in descending order (lastest entry first)
$contactus = mysqli_query($mysqli, "SELECT * FROM contpages ");
?> 
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Contact Information</h2>
          </div>
        </div>
    
        <section class="no-padding-top">
        <button type="submit" class="btn btn-primary"><a class="btn btn-primary" href="Create_contactpages.php">Create New
        Contact Information</a></button>
    <hr class="font">
    
          <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <div class="title"><strong>All ContactUS Information</strong></div>
            <div class="table-responsive">
              <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th> Loction</th>
                          <th>Email</th>
                          <th>Call</th>
                          <th>Created_at</th>
                          <th>Upadted_at</th>
                          <th>Action</th>
                     
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php   foreach ($contactus as $key => $row) {
                    ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['loction']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['date_added']; ?></td>
                      <td><?php echo $row['date_update']; ?></td>

                      <td>
                      <a href="edit_contactpages.php?id=<?= $row['id']?>">Edit</a> |||
					
            
                      <a href="delete_contactpages.php?id=<?= $row['id']?>">Delete</a>
					
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
      
 <?php include 'layouts/footer.php';            ?> 