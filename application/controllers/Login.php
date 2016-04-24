<?php
{
    if($this->session->userdata('userid')) {
        redirect("/homepagina");
    }

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    $data = array('failed' => false);
    if ($this->form_validation->run()) {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($this->usermodel->userLogin($email, $password)) {

            if ($this->session->userdata('adminid'))
                redirect("/adminpagina");
            else
                redirect("/homepagina");
            return;
        }

        $data['failed'] = true;
    }

    $data['title'] = 'Sign in';
    $this->load->view('', $data);
}