<?php

class Datatest extends CI_Controller {

    public function index()
    {
        $this->load->model('Datatestv3');
        $data['results'] = $this->Datatestv3->getData();
        $this->load->view('Datatest', $data);
    }
}