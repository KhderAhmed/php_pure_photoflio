
<?php include 'layouts/header.php';   

//including the database connection file
include '../database/env.php';

//fetching data in descending order (lastest entry first)
$results = mysqli_query($mysqli, "SELECT * FROM homeimage ");?> 
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">HomePages</h2>
          </div>
        </div>
    
        <section class="no-padding-top">
        <button type="submit" class="btn btn-primary"><a class="btn btn-primary" href="Create_home.php">Create New
      HomeImages</a></button>
        <hr>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-7">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>All Images</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Images</th>
                          <th>Created_at</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                     
                      <?php
                  foreach ($results as $row) {
                    ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td>  <img width="80px" height="80" src="<?= $row['image']?>" alt="">  </td>
                      <td><?php echo $row['date_added']; ?></td>
              
                      <td>
                
                      
                      <a href="delete_home.php?id=<?= $row['id']?>">Delete</a>
					
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