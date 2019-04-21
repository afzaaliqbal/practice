<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="core_login/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" /> 

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <?php  include('header.php');    ?>
    <?php       include('database_configration.php'); ?>
</head>

<body class="theme-red">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login Page</div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
          <!-- <?php //echo form_open('Lunch_main_controller/login'); ?> -->
            <div class="form-group">
                <input type="" name="username" class="form-control" placeholder="Name" onkeypress="" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
            </div><br>
            <div class="form-group">
                <input type="password" name="userPassword" class="form-control" placeholder="Password" >
                <label for="inputPassword">Password</label>
            </div><br>
            <input type="file" name="file" class="" accept="image/*" ><br>
            <div class="form-group">
             <div class="form-group">
                <input type="radio" name="Gender"  placeholder="Male" value="Male">Male<br>
              <input type="radio" name="Gender"  placeholder="Female" value="female">Female<br> 
            </div>     
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" name="signin" type="submit">Login</button>
                     <button class="btn btn-primary btn-block" type="submit" name="signup">Signup</button>
                  </form>
                  <div class="box-header with-border a col-lg-offset-1">
                    <?php
                              $sql    = "SELECT * FROM login_user" ;
                              $result = $conn->query($sql);
                            ?>
              <table class="table table-bordered b ">
                <thead>
                <tr>
                  <th>product ID</th>
                  <th>product name</th>
                  <th>product type</th>
                  <th>product price</th>
                  <th>product manufactured by</th>
                </tr>
                </thead>
            <?php    while( $row = mysqli_fetch_assoc($result) ){ ?>
                <tbody>
                <tr>
                  <td><?php echo $row['id'];?></td> 
                  <td><?php echo $row['user_name'];?></td>
                  <td><?php echo $row['user_password'];?></td>
                  <td><?php echo $row['picture'];?></td>
                  <td><?php echo $row['Gender'];?></td>
                  <td><form action="" method="POST">
                  <button name="del" value="<?php echo $row['id']; ?>"  onclick="return deleteRecord();" type="submit" >Delete</button>
                </form>
                 </td>
                </tr>
                </tbody>
               <?php } ?>
                <tfoot>
                <tr>
                  <th>product ID</th>
                  <th>product name</th>
                  <th>product type</th>
                  <th>product price</th>
                  <th>product manufactured by</th>
                </tr>
                </tfoot>
              </table>
             </div>
                 <?php  if(isset($_POST["signup"]))
                        {
                            insertuser();
                        }

                        if (isset($_POST["signin"])) 
                        {
                        authUser();
                        }
                        if(isset($_POST["del"]))
                        {   
                            userdel();
                        }


                    ?>
<!--             <?php if ($this->session->flashdata('error')) { ?>
 -->            <div class="alert alert-danger">
            <?=  $this->session->flashdata('error'); ?>
            </div>    <?php }  ?>
        </div>
      </div>
    </div>
   <?php  include('login.php'); ?> 
<!--    <?php //$this->load->view('login'); ?> -->
<script>
    function deleteRecord(){
        var r = confirm("Do you want to delete this?")
        if (r == true)
            return true;
        else
            return false;
    }
    </script>
</body>
</html>
476vuw@#21