<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('v_home');
        $this->load->view('templates/footer');
    }

}

/* End of file Controllername.php */


?>