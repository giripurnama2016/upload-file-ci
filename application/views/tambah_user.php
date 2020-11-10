<?php

$user_data = $this->session->userdata('user_data');
if(!$user_data){
    redirect('google_login/login');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=base_url()?>index.php/google_login/tambah_user" method="post">
    <table align="center">
    <tr><td>Nama</td><td>:</td><td><input type="text" name="nama"></td></tr>
    <tr><td>Password</td><td>:</td><td><input type="password" name="pass"></td></tr>
    <tr><td>e-Mail Google</td><td>:</td><td><input type="text" name="email"></td></tr>
    <tr><td>&nbsp;</td><td>:</td><td><input type="submit" name="submit" value="Submit"></td></tr>
    </table>
    
    
    </form>
</body>
</html>