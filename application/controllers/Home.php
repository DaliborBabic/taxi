<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index() {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home');
        $this->load->view('template/footer');


        $this->load->model('home_model');
        echo '<pre>';
        print_r($this->home_model->getAuto());
        echo '</pre>';
    }

    }
?>