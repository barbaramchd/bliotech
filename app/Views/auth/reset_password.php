<?php echo view("auth/header"); ?>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="./index.html"><b>Blio</b>Tech</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Create new password</p>
            <div id="infoMessage"><?php echo $message;?></div>
            <form action="<?= base_url("auth/reset_password/".$code);?>" method="post">
                <div class="input-group mb-3">
                    <input name="new" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input name="new_confirm" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?php echo form_input($user_id);?>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.forgot_password-box -->
<?php echo view("auth/footer"); ?>

