<!DOCTYPE html>
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
    <h1>Edit User  <a href="<?php echo base_url()?>admin">Back</a></h1>

    <form method="post" action="<?php echo base_url()?>admin/updateuser/<?php echo $user->uid;?>" enctype="multipart/form-data">
<div class="m-4">

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
             <input type="text" name="username" class="form-control" value="<?php echo $user->uname;?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
             <input type="text" name="uemail" class="form-control" value="<?php echo $user->email;?>">
        </div>
    </div>
    <div class="row">
        <label class="col-sm-2 col-form-label col-form-label-sm">Mobile Number</label>
        <div class="col-sm-10">
            <input type="text" name="mobno" class="form-control" value="<?php echo $user->mob_no;?>">
        </div>
    </div><br>


    <div class="row">
        <label class="col-sm-2 col-form-label col-form-label-sm">Upload Photo</label>
        <div class="col-sm-10">
            <input type="file" name="photo" class="form-control">
        </div>
    </div><br>

    <div class="row">
        <label class="col-sm-2 col-form-label col-form-label-sm">Photo</label>
        <div class="col-sm-10">
            <img style="height: 100px; width: 100px;" src="<?php echo base_url()?>assets/images/<?php echo $user->photo; ?>">
        </div>
    </div><br>

                <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>


</div>
 </form>

</div>

 



    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>