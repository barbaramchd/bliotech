<?php echo view("auth/header"); ?>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="./index.html"><b>Blio</b>Tech</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="<?=base_url("auth/footer"); ?>" method="post">


                <!-- TODO: Error message box. This div is just a dummy div, we need some nice box for "incoorect password/ succesfull registration-->
                <div id="infoMessage"><?php echo $message;?></div>
                <!---END of error message box -->


                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="<?=base_url(); ?>/auth/forget_password">I forgot my password</a>
            </p>
            <p class="mb-0"> <!-- TODO: registration page -->
                <a href="<?=base_url(); ?>" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- TODO: update the form above
<?php echo view("auth/footer"); ?>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/login');?>

  <p>
    <?php echo form_label(lang('Auth.login_identity_label'), 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo form_label(lang('Auth.login_password_label'), 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo form_label(lang('Auth.login_remember_label'), 'remember');?>
    <?php echo form_checkbox('remember', '1', false, 'id="remember"');?>
  </p>
<p><a href="forgot_password"><?php echo lang('Auth.login_forgot_password');?></a></p>

-->

<?php echo view("auth/footer"); ?>