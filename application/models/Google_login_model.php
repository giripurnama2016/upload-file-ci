<?php
class Google_login_model extends CI_Model
{
 function Is_already_register($id)
 {
  $this->db->where('login_oauth_uid', $id);
  $query = $this->db->get('grab_user');
  if($query->num_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }

 function Update_user_data($data, $id)
 {
  $this->db->where('login_oauth_uid', $id);
  $this->db->update('grab_user', $data);
 }

 function Insert_user_data($data)
 {
  $this->db->insert('grab_user', $data);
 }

 function cek_user($nm){
    $this->db->where('email', $nm);
    $query = $this->db->get('daftar_user');
    if($query->num_rows() > 0)
    {
     return true;
    }
    else
    {
     return false;
    }

 }

 function profil_user($email){
    //$this->db->where('email', $email);
    $dat=$this->db->query('SELECT nama,email,daftar_user.level_id,level_title FROM `daftar_user` INNER JOIN level_user ON daftar_user.level_id=level_user.level_id');
    return $dat;

 }

//  function level_user($level){
//    $this->db->where('level_id', $level);
//    return $this->db->get('level_user');

// }

 function tambah_user_data($data)
 {
  $this->db->insert('daftar_user', $data);
 }
}
?>