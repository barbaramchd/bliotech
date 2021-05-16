<?php echo view("auth/header"); ?>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="./index.html"><b>Blio</b>Tech</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You forgot your password? Let us help you with that!</p>
            <div id="infoMessage"><?php echo $message;?></div>
            <form action="<?= base_url("auth/forgot_password");?>" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="identity" class="form-control" placeholder="Email">
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
                <a href="<?= base_url("auth");?>/">Login</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.forgot_password-box -->
<?php echo view("auth/footer"); ?>
