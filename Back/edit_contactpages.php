<?php include 'layouts/header.php'; ?>


<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Edit Contact Information</h2>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong>Edit Contact Information</strong></div>
            <div class="block-body">

                <?php
                include '../database/env.php';

                if (isset($_POST['update'])) {
                    $id = $_POST['id'];
                    $loction = $_POST['loction'];
                    $email = $_POST['email'];
                    $call = $_POST['phone'];



                    if ($loction == "" || $email == "" || $call == "") {
                        echo "All fields should be filled. Either one or many fields are empty.";
                        echo "<br/>";
                    } else {
                        mysqli_query(
                            $mysqli,
                            "UPDATE contpages SET loction='$loction', email='$email', phone='$call' WHERE id=$id"
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
                    $result = mysqli_query($mysqli, "SELECT * FROM contpages WHERE id=$id");

                    while ($res = mysqli_fetch_array($result)) {

                        $loction = $res['loction'];
                        $email = $res['email'];
                        $call = $res['phone'];

                    }
                    ?>
                    <form method="post">

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Loction</label>
                            <div class="col-sm-9">
                                <input name="loction" value="<?php echo $loction; ?>" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" value="<?php echo $email; ?>" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">call</label>
                            <div class="col-sm-9">
                                <input type="number" value="<?php echo $call; ?>" name="phone" class="form-control">
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-9 ml-auto">
                                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>

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