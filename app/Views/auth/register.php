<?php echo view("auth/header"); ?>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?=base_url(""); ?>/index.html"><b>Blio</b>Tech</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">For registration please contact our sales team.</p>

                <!---END of error message box -->
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <center><a href="<?=base_url("auth");?>" class="btn btn-primary btn-block">Return to Login</a></center>
                    </div>
                    <!-- /.col -->
                </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<?php echo view("auth/footer"); ?>