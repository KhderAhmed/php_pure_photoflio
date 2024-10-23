<?php include 'layouts/header.php'; ?>


<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Edit About</h2>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong>Edit About</strong></div>
            <div class="block-body">

                <?php
                include '../database/env.php';

                if (isset($_POST['update'])) {
                    $id = $_POST['id'];
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
                        mysqli_query(
                            $mysqli,
                            "UPDATE abouts SET birthday='$birthday', website='$website', phone='$phone',city='$city',age='$age',freelance='$freelance' WHERE id=$id"
                        )
                            or die("Could not execute the insert query.");

                        echo "Registration successfully";
                        echo "<br/>";

                    }
                } else {
                    ?>
                    <?php
                    //getting id from url
                    $id = $_GET['id'];

                    //selecting data associated with this particular id
                    $result = mysqli_query($mysqli, "SELECT * FROM abouts WHERE id=$id");

                    while ($res = mysqli_fetch_array($result)) {

                        $birthday = $res['birthday'];
                        $website = $res['website'];
                        $phone = $res['phone'];
                        $city = $res['city'];
                        $age = $res['age'];
                        $freelance = $res['freelance'];

                    }
                    ?>
                    <form method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Birthday</label>
                            <div class="col-sm-9">
                                <input name="birthday" value="<?php echo $birthday; ?>" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Website</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $website; ?>" name="website" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="number" value="<?php echo $phone; ?>" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">City</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $city; ?>" name="city" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Age</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $age; ?>" name="age" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Freelance</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $freelance; ?>" name="freelance" class="form-control">
                            </div>
                        </div>
                </div>

            </div>
        </div>
        <div class="line"></div>

        <div class="line"></div>
        <div class="form-group row">
            <div class="col-sm-9 ml-auto">
                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                <button type="submit" class="btn btn-secondary">Cancel</button>
                <button name="update" type="submit" class="btn btn-primary">Save changes</button>
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