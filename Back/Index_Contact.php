
<?php include 'layouts/header.php';  

//including the database connection file
include '../database/env.php';

//fetching data in descending order (lastest entry first)
$contact = mysqli_query($mysqli, "SELECT * FROM contact ");
?> 
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Contact</h2>
          </div>
        </div>
    
        <section class="no-padding-top">

    
          <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block margin-bottom-sm">
            <div class="title"><strong>All Contact</strong></div>
            <div class="table-responsive">
              <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th> Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                     
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php   foreach ($contact as $key => $row) {
                    ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['subject']; ?></td>
                      <td><?php echo $row['message']; ?></td>
          
                   
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