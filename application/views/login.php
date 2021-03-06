<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>/assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php echo base_url('auth/login')?>">
							<h1>Login Form</h1>
							<?php echo $this->session->flashdata('pesan') ?>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
              </div>
              <div>
								<!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
								<button type="submit" class="btn btn-default submit">Log in</button>
                <a class="to_register" href="#signup"> Create Account </a>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="<?php echo base_url('auth/daftar') ?>" enctype="multipart/form-data">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="username1" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="text" name="nama" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="text" name="contact" class="form-control" placeholder="Contact" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password1" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" name="masuk">Submit</button> 
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
