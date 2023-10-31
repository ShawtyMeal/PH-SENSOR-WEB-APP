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
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Report</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
<!--             <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
          </ol> -->
      </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->
<section class="content">
	<div class="container-fluid">

		<p>dito nyo lagay yung content</p>

	</div>
</div>


<?php
include('includes/footer.php');
?>