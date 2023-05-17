<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
class Hr extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model( 'company_model' );
    $this->load->model( 'user_model' );
    $company = $this->company_model->get();
    if ( empty( $company ) ) {
      show_404();
    }
  }
   public function index() {
    $this->load->view( 'hr/home' );
  }

  public function view( $page ) {

    if ( !file_exists( APPPATH . 'views/hr/' . $page . '.php' ) ) {
      show_404();
    }

    $this->load->view( 'hr/' . $page );
  }

}