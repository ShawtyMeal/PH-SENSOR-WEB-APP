<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="content-wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card  mt-5">
            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                unset($_SESSION['status']);
            }
            ?>
                <div class="card-header">
                  Change Password
                </div>
                <div class="card-body">

                <?php

                if(isset($_SESSION['verified_user_id']))
                {
                    $uid = $_SESSION['verified_user_id'];
                    $user = $auth->getUser($uid);
                    ?>

                <form action="code.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="change_pwd_user_id" value="<?=$uid?>">
                            <div class="form-group mb-3">
                                <label for="">New Password</label>
                                <input type="password" name="new_password" required class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Re-Type Password</label>
                                <input type="password" name="retype_password" required class="form-control">
                            </div>
                            <div class="form-group mb-3 mt-5 float-right">
                                <button type="submit" name="change_password_btn" class="btn btn-success">Change Password</button>
                            </div>
                <?php
                }


                ?>

</div>
            </div>
        </div>
        </div>
        </div>
        </div>



<?php
include('includes/footer.php');
?>
