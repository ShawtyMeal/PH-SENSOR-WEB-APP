<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
            if(isset($_SESSION['status']))
            {
                echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                unset($_SESSION['status']);
            }
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="container-fluid">
            </div>
                    <div class="col-sm-12">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-5">
                        <div class="card-header py-3">
                        <h4 class="m-2 font-weight-bold text-primary">Users&nbsp;<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a></h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>NO#</th>
                                        <th>Full Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Disable / Enable</th>
                                        <th>Edit</th>
                                        <th>Delete</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                $users = $auth->listUsers();
                                $i = 1;
                                foreach ($users as $user)
                                {
                                    ?>

                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$user->displayName;?></td>
                                        <td><?=$user->phoneNumber;?></td>
                                        <td><?=$user->email;?></td>
                                        <td>
                                        <span class="border bg-warning p-2">
                                            <?php

                                            $claims = $auth->getUser($user -> uid)->customClaims;

                                            if(isset($claims['admin']) == true)
                                            {
                                                echo "Admin";
                                            }
                                            elseif(isset($claims['gardener']) == true)
                                            {
                                                echo "gardener";
                                            }
                                            elseif($claims == null)
                                            {
                                                echo "No Role";
                                            }
                                            ?>
                                        </span>
                                        </td>
                                        <td>
                                            <?php
                                            if($user -> disabled)
                                            {
                                                echo "Disabled";
                                            }
                                            else{
                                                echo "Enabled";
                                            }


                                            ?>
                                        </td>

                                        <td>

                                        <a href="user_edit.php?id=<?=$user -> uid;?>" class="btn btn-primary btn-sm">Edit </a>
                                        </td>

                                        </td>
                                            <td>
                                        <form action="code.php" method="POST">
                                            <button type="submit" name="reg-user-delete-btn" value="<?=$user -> uid;?>" class="btn btn-danger">Delete</button>
                                        </form>
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




<?php
include('Modal/user_modal.php');
include('includes/footer.php');
?>
