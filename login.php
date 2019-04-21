<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>lunch management</title>
    <!-- Bootstrap core CSS-->
    <link href="<?= base_url('assetes/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assetes/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?= base_url('assetes/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assetes/css/sb-admin.css')?>" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <?php echo form_open('Lunch_main_controller/login'); ?>
            <div class="form-group">
                <input type="email" name="inputEmail" class="form-control" placeholder="Email address"  autofocus="autofocus">
                <label for="inputEmail">Email address</label>
            </div>
            <div class="form-group">
                <input type="password" name="inputPassword" class="form-control" placeholder="Password" >
                <label for="inputPassword">Password</label>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>
            <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger">
            <?=  $this->session->flashdata('error'); ?>
            </div>    <?php }  ?>
          <?= form_close() ?>
          <!-- <div class="text-center">
            <a class="d-block small mt-3" href="<?= base_url('lunch_main/register') ?>">Register an Account</a>
            <a class="d-block small" href="<?= base_url('lunch_main/forgot_password') ?>">Forgot Password?</a>
          </div> -->
        </div>
      </div>
    </div>
     <?php $this->load->view('includes/footer'); ?>
  </body>
</html>
