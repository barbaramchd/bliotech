<div class="login-box">
    <div class="login-logo">
        <a href="./index.html"><b>Blio</b>Tech</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You forgot your password? Let us help you with that!</p>

            <form action="recover-password.html" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="login.html">Login</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new account</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.forgot_password-box -->


<h1><?php echo lang('Auth.forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('Auth.forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/forgot_password');?>

      <p>
      	<label for="identity"><?php echo (($type === 'email') ? sprintf(lang('Auth.forgot_password_email_label'), $identity_label) : sprintf(lang('Auth.forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

      <p><?php echo form_submit('submit', lang('Auth.forgot_password_submit_btn'));?></p>

<?php echo form_close();?>
