<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uranus Library</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Isi CSS -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Login CSS -->
    <link href="<?php echo base_url(); ?>assets/css/customlogin.css" rel="stylesheet"> 

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="navbar navbar-default">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('');?>"><strong>URANUS-DEV</strong></a>
        </div>
        </div>
    </div>
    <!-- end navbar -->
    
    <!-- line-height -->
<div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-lock"></span> <strong>LOGIN</strong>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo base_url().'welcome/login' ?>" method="post">
                    <?php echo $this->session->flashdata('message');?>
                    <div class="form-group">
                        <p class="col-sm-3">Username </p>
                        <?php echo form_error('username'); ?>

                        <div class="col-sm-9">
                           <?php echo form_error('username'); ?>
                            <input type="text" name="admin_username" class="form-control" id="inputEmail3" placeholder="Username" value="<?php echo set_value('username'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <p class="col-sm-3">Password </p>
                        <div class="col-sm-9">
                            <?php echo form_error('password'); ?>

                            <input type="password" name="admin_password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo set_value('password'); ?>">
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="proses" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                </form>
				<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger alert-danger'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}else if($_GET['pesan'] == "logout"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-success'>";
						echo $this->session->flashdata('Anda Telah Logout');
						echo "</div>";
					}
					echo "<div class='alert alert-success'><center>Anda telah logout.</center></div>";
				}else if($_GET['pesan'] == "belumlogin"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-primary'>";
						echo $this->session->flashdata('alert');
						echo "</div>";
					}
					echo "<div class='alert alert-primary'>Silahkan login dulu.</div>";
				}
			}else{
				if($this->session->flashdata())
				{
					echo "<div class='alert alert-danger alert-message'>";
			                    		echo $this->session->flashdata('alert');
					echo "</div>";
				}
			}
		?>

            </div>
           
        </div>
    </div>
    <div class="col-md-8 ">
        <h4> Welcome to Our Library </h4><hr class="line-title"> 
        <img src="<?php echo base_url(); ?>assets/img/img-lib.jpg" alt="Belum Tersedia" class="img-responsive">
    </div>
</div>
</div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>

</body>

</html>
