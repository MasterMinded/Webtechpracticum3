<?php

Class Usermodel extends CI_Model {


    public function userLogin($email, $password)
    {
        $crypt_password = md5($password);
        $query = $this->db->get_where('users', array('email' => $email));
        $user = $query->row_array();


        if (empty($user)) {
            return false;
        }

        if ($crypt_password != $user['password']) {
            return false;
        } else {
            return true;
        }
    }


    public function regUser($input)
    {

        $data = array(
            'username' => element('username', $input),
            'firstname' => element('firstname', $input),
            'lastname' => element('lastname', $input),
            'password' => md5(element('password', $input)),
            'email' => element('email', $input),
            'gender' => element('gender', $input),
            'date' => element('date', $input),
            'description' => element('description', $input),
        );

        $this->db->insert('Users', $data);
    }

    public function delUser($userid)

    {
        $this->db->where('UserID', $userid);
        $this->db->delete('Users');
    }

    }
?>