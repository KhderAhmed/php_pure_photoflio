<?php include 'layouts/header.php'; ?>




<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">New HomeImages</h2>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong>Create New HomeImages</strong></div>
            <div class="block-body">

                <?php
                include '../database/env.php';

                if (isset($_POST['add'])) {





                    $target_dir = "images//";
                    $target_file = $target_dir . basename($_FILES["inputimg"]["name"]);
                    move_uploaded_file($_FILES["inputimg"]["tmp_name"], $target_file);




                    mysqli_query($mysqli, "INSERT INTO homeimage(image) 
                  VALUES ('$target_file')")
                        or die("Could not execute the insert query.");

                    echo "Registration successfully";
                    echo "<br/>";


                } else {
                    ?>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Images</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="inputimg" accept="images/aces/*" required>
                            </div>
                        </div>
                        <div class="line"></div>

                </div>

            </div>
        </div>
        <div class="line"></div>

        <div class="line"></div>
        <div class="form-group row">
            <div class="col-sm-9 ml-auto">

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