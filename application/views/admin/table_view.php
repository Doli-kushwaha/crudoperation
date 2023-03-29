<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	
	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.table-dark {
    --bs-table-bg: #607D8B;
    --bs-table-striped-bg: #2c3034;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    color: #fff;
    border-color: #373b3e;
}
.btn-primary {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
    margin-left: 90%;
    margin: top;
    /* height: 36px; */
}
	</style>
</head>
<body>

<div id="container">
	<!---Start Session sms display karnya sathi use kela jato -->
<div class="col-md-12">
<?php 
if($this->session->userdata('success')){
$success = $this->session->userdata('success');
if($success != "") {
?>
<div class="alert alert-success"><?php echo $success;?></div>
<?php
 }
}
?>

<?php 
if($this->session->userdata('danger')){
$danger = $this->session->userdata('danger');
if($danger != "") {
?>
<div class="alert alert-danger"><?php echo $danger;?></div>
<?php
 }
}
?>
</div>
<!--End Session-->
	<h1>Crud Operation</h1>

<div class="m-4">
    <table class="table">
    	 <a href="<?php echo base_url()?>admin/adduser" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>

        <thead class="table-dark">
            <tr>
                <th>#Srno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mob No.</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($usersdata as $key => $value) {
        		
          ?>
            <tr>
                <td><?= $value['uid']?></td>
                <td><?= $value['uname']?></td>
                <td><?= $value['email']?></td>
                <td><?= $value['mob_no']?></td>
                <td><img style="height: 55px; width: 70px;" src="<?php echo base_url()?>assets/images/<?php echo $value['photo']?>"></td>
                <td><a class="btn btn-info" href="<?php echo base_url()?>admin/edituser/<?= $value['uid']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <td><a class="btn btn-danger" href="<?php echo base_url()?>admin/userdelete/<?= $value['uid']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

            </tr>
        <?php }?>
          
        </tbody>
    </table>
</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>