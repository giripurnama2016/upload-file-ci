<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login with Google in Codeigniter</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  div.container {

      margin-top: 25px
  }
  </style>
 </head>
 <body>
  <div class="container">
   <!-- <br />
   <h2 align="center">Login using Google Account with Codeigniter</h2>
   <br /> -->
   <div class="panel panel-primary">
   <?php
   if(!isset($login_button))
   {

    $user_data = $this->session->userdata('user_data');
    echo '<div class="panel-heading">Welcome User</div> ';
    echo '<div class="panel-body">';

    echo '<div class="panel panel-success">';
    echo '<div class="panel-heading">Profil Gmail</div> ';
    echo '<img src="'.$user_data['profile_picture'].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name : </b>'.$user_data["first_name"].' '.$user_data['last_name']. '</h3>';
    echo '<h3><b>Email :</b> '.$user_data['email_address'].'</h3>';
    echo '<h3><a href="'.base_url().'index.php/google_login/logout">Logout</h3>';
    //echo anchor('google_login/tambah_user_form','Tambah User').
    echo '</div>';
    
    foreach($user as $us){
    echo '<div class="panel panel-info">';
    echo '<div class="panel-heading">Profil Aplikasi</div> ';
    echo '<img src="'.$user_data['profile_picture'].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name : </b>'.$us->nama. '</h3>';
    echo '<h3><b>Email :</b> '.$us->email.'</h3>';
    echo '<h3><b>Level :</b> '.$us->level_title.'</h3>';
    echo '<h3><a href="'.base_url().'index.php/google_login/logout">Logout</h3>';
    if($us->level_id=='1'){
       echo anchor('google_login/tambah_user_form','Tambah User');
    }
    echo '</div>';
    }
    
    echo '</div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>
