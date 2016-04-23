<?php

class Datatest extends CI_Controller {

    public function index()
    {
        $this->load->model('Datatest');
        $dataSet = $this->Datatest->getData();
        $this->load->view('Datatest', [
                'dataSet' => $dataSet
            ]);
    }
}