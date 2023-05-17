<?php
class Company_model extends CI_Model {
  public $table = 'companies';
  public function __construct() {
    parent::__construct();
  }
  public function get() {
    $subdomain_arr = explode( '.', $_SERVER[ 'HTTP_HOST' ], 2 );
    $subdomain_name = $subdomain_arr[ 0 ];
    $query = $this->db->get_where( $this->table, array( 'username' => $subdomain_name ) );
    return $query->row();
  }
}
?>