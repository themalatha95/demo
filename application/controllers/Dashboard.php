<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Dashboard extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model( 'company_model' );    
    $company = $this->company_model->get();
    if ( empty( $company ) ) {
      show_404();
    }
    if ( !$this->session->userdata( 'user_id' ) ) {
      redirect( 'login' );
    }
  }
  public function index() {
    $this->load->view( 'dashboard' );
  }
}