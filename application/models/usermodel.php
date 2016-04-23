<?php

Class Usermodel extends CI_Model {


    public function userLogin($email, $password)
    {
        $crypt_password = md5($password);
        $query = $this->db->get_where('users', array('email' => $email));
        $user = $query->row_array();


        if (empty($user))    {
        return false;
        }

        if (crypt($password, $user['password']) != $user['password'])    {
        return false;
        }

        $this->db->where('userid', $user['userid']);
        $this->db->update('users', array('password' => $crypt_password));
        $id = ($user['admin'] == 'TRUE' ? 'adminid' : 'userid'); //is het een user of admin account

        $session_data = array(
        $id => $user['userid'],
        'email' => $user['email']
        );

        $this->session->set_userdata($session_data);
        return true;
        }
    }
?>