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
            'Username' => element('username', $input),
            'Firstname' => element('firstname', $input),
            'Lastname' => element('lastname', $input),
            'Password' => md5(element('password', $input)),
            'Email' => element('email', $input),
            'Gender' => element('gender', $input),
            'Birthday' => element('date', $input),
            'Description' => element('description', $input),
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