<?php
class Login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if (!$this->usermodel->userLogin($email, $password)) {

                redirect('home/relogin');
            }  else {
                $this->session->set_userdata(
                    array(
                        'logged_in' => TRUE,
                        'UserID' => $user,
                        'UserName' => $email
                    ));
                redirect('/home');
                return;
            }

        }

    }

    public function registerUser()

    {
        $this->load->model('usermodel');

        $input = $this->input->post();

        $this->usermodel->regUser($input);

        redirect('/home');


    }


    
    
}
