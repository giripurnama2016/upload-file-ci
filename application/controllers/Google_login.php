<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Google_login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('google_login_model');
 }

 function index(){

    redirect('google_login/login');

 }

 function login()
 {
  include_once APPPATH . "libraries/vendor/autoload.php";

  $google_client = new Google_Client();

  $google_client->setClientId('1028856007772-kdt7htgu1otootthqod2i7uv85igmgg1.apps.googleusercontent.com'); //Define your ClientID

  $google_client->setClientSecret('g7kBMDyfPOQUx61jVhgnWskw'); //Define your Client Secret Key

  $google_client->setRedirectUri('http://localhost/upload-file-ci/index.php/google_login/login'); //Define your Redirect Uri

  $google_client->addScope('email');

  $google_client->addScope('profile');

  if(isset($_GET["code"]))
  {
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"]))
   {
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token', $token['access_token']);

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();

    $current_datetime = date('Y-m-d H:i:s');

     if(!$this->google_login_model->cek_user($data['email'])){
        redirect('google_login/logout_true');

     }


    if($this->google_login_model->Is_already_register($data['id']))
    {
     //update data
     $user_data = array(
      'first_name' => $data['given_name'],
      'last_name'  => $data['family_name'],
      'email_address' => $data['email'],
      'profile_picture'=> $data['picture'],
      'updated_at' => $current_datetime
     );

     $this->google_login_model->Update_user_data($user_data, $data['id']);
    }
    else
    {
     //insert data
     $user_data = array(
      'login_oauth_uid' => $data['id'],
      'first_name'  => $data['given_name'],
      'last_name'   => $data['family_name'],
      'email_address'  => $data['email'],
      'profile_picture' => $data['picture'],
      'created_at'  => $current_datetime
     );

     $this->google_login_model->Insert_user_data($user_data);
    }
    $this->session->set_userdata('user_data', $user_data);
   }
  }
  $login_button = '';
  if(!$this->session->userdata('access_token'))
  {
   $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'assets/google-sign-in.png" /></a>';
   $data['login_button'] = $login_button;

   $this->load->view('google_login', $data);
  }
  else
  {
    //   $data = array(
    //       'nama'=>'oki',
    //       'email'=>'giripurnama@yahoo.com'
    //   );


$em = $data['email'];

   $datax['user']=$this->google_login_model->profil_user($em)->result();

   $this->load->view('google_login', $datax);
  }
 }

 function logout()
 {
  $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  redirect('google_login/login');
 }

 function logout_true()
 {
  $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  $this->load->view('google_no_register');
 }

 function tambah_user(){
    $user_data = array(
   // 'user_id'=>'',
    'nama'=>$this->input->post('nama'),
    'pass'=>$this->input->post('pass'),
    'email'=>$this->input->post('email')
    );

    $this->google_login_model->tambah_user_data($user_data);
    $this->load->view('tambah_user');
 }

 function tambah_user_form(){

    $this->load->view('tambah_user');
 }
 
}
?>
