<?php
class User_model extends CI_Model {
  public $table = 'users';
  public function __construct() {
    parent::__construct();
  }
  public function all( $sort_by, $sort_order, $limit, $start ) {
    $this->db->from( $this->table );
    $this->db->order_by( $sort_by, $sort_order );
    $this->db->limit( $limit, $start );
    $query = $this->db->get();
    $this->lastQuery = $this->db->last_query();
    return $query->result();
  }
  public function total_rows() {
    $sql = explode( 'LIMIT', $this->lastQuery );
    $query = $this->db->query( $sql[ 0 ] );
    $result = $query->result();
    return count( $result );
  }
  public function validation( $username, $password ) {
    $query = $this->db->get_where( $this->table, array( 'username' => $username, 'password' => md5( $password ), 'status' => 1 ) );
    return $query->num_rows();
  }
  public function get_id( $username ) {
    $query = $this->db->get_where( $this->table, array( 'username' => $username ) );
    $row = $query->row_array();
    return $row[ 'id' ];
  }
  public function get_name( $id ) {
    $query = $this->db->get_where( $this->table, array( 'id' => $id ) );
    $row = $query->row_array();
    return ( $row[ 'firstname' ] ) ? $row[ 'firstname' ] : $row[ 'email' ];
  }
  public function username_count( $username ) {
    $query = $this->db->get_where( $this->table, array( 'username' => $username ) );
    return $query->num_rows();
  }
  public function insert( $id ) {
    $this->db->insert( $this->table, array( 'id' => $id ));
    return $this->db->insert_id();
  }
  public function read( $id ) {
    $query = $this->db->get_where( $this->table, array( 'id' => $id ) );
    return $query->row();
  }
  public function update( $id, $data ) {
    $this->db->where( 'id', $id );
    $this->db->update( $this->table, $data );
  }
  public function updateToken( $username, $data ) {
    $this->db->where( 'username', $username );
    $this->db->update( $this->table, $data );
  }
  public function get_token_date( $token ) {
    $query = $this->db->get_where( $this->table, array( 'token' => $token ) );
    $row = $query->row_array();
    return ( !empty( $row[ 'token_date' ] ) ) ? $row[ 'token_date' ] : '';
  }
  public function delete( $id ) {
    $this->db->where( 'id', $id );
    $this->db->delete( $this->table );
  }
}
?>