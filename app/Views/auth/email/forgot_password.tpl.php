<html>
<body>
    <p><b>Hi <?=$identity;?></b></p>
    <p>Your account at Blio.tech is waiting for you to create a new password. Please use following <a href="<?=base_url('auth/reset_password/' . $forgottenPasswordCode);?>">link</a> to create your new password:</p>
    <p><a href="<?=base_url('auth/reset_password/' . $forgottenPasswordCode);?>"><?=base_url('auth/reset_password/' . $forgottenPasswordCode);?></a></p>
    <p></p>
    <p>Thank you for using our service.</p>
    <p><i>Team Blio</i></p>
</body>
</html>
