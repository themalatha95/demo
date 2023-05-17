<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
class User extends CI_Controller {
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
    if ( !$this->session->userdata( 'user_id' ) ) {
      redirect( 'login' );
    } else {
      if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
        $insert = array(
          'firstname' => $this->input->post( 'firstname', true ),
          'lastname' => $this->input->post( 'lastname', true ),
          'phone' => $this->input->post( 'phone', true ),
          'company' => $this->input->post( 'company', true ),
          'country' => $this->input->post( 'country', true ),
          'time_zone' => $this->input->post( 'time_zone', true )
        );
        $this->user_model->update( $this->session->userdata( 'user_id' ), $insert );
      }
      // if ( $_SERVER[ 'REQUEST_METHOD' ] === 'GET' ) {
      $data[ 'title' ] = 'Account';
      $data[ 'user' ] = $this->user_model->read( $this->session->userdata( 'user_id' ) );
      $data[ 'timezones' ] = $this->timezone_model->get();
      $data[ 'countries' ] = $this->countries_model->get();

      $this->load->view( 'account/index', $data );
      // }
    }
  }
  public function password() {
    if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
      $insert = array(
        'password' => md5( $this->input->post( 'password', true ) )

      );
      $this->user_model->update( $this->session->userdata( 'user_id' ), $insert );
    }
    $this->load->view( 'account/password' );
  }


  public function login() {
    if ( $this->session->userdata( 'user_id' ) ) {
      redirect( base_url() );
    }
    $data[ 'title' ] = 'Login';
    $this->load->view( 'account/login', $data );
  }

  public function login_post() {
    $username = $this->input->post( 'username', TRUE );
    $password = $this->input->post( 'password', TRUE );
    if ( $this->user_model->validation( $username, $password ) > 0 ) {
      $id = $this->user_model->get_id( $username );
      $this->session->set_userdata( 'username', $username );
      $this->session->set_userdata( 'user_id', $id );

      $user = $this->user_model->read( $id );
      $this->session->set_userdata( 'role_id', $user->role_id );

      $data = array(
        'user_id' => $id,
        'session_id' => session_id(),
        'ip' => $_SERVER[ 'REMOTE_ADDR' ],
        'event' => 'Log In',
        'created_date' => date( 'Y-m-d H:i:s' )
      );
      $this->db->insert( 'user_log', $data );
      redirect( base_url() );

    } else {
      $this->session->set_flashdata( 'msg', 'Invalid details. Try again' );
      redirect( 'login' );
    }
  }

  public function forgot() {
    $data[ 'title' ] = 'Forgot';
    $this->load->view( 'account/forgot', $data );
  }
  public function forgot_post() {
    $email = $this->input->post( 'username', true );

    $body = $this->load->view( 'email/forgot', '', true );

    $token = md5( rand() );
    $data = array(
      'token' => $token,
      'token_date' => date( 'Y-m-d h:m:s' )
    );
    $this->user_model->updateToken( $email, $data );

    // Replace
    $replaceList = array(
      'username' => $email,
      'token' => $token,
      'utm_source' => 'hz_email',
      'utm_medium' => 'email',
      'utm_campaign' => 'ForgotPassword'
    );
    $pattern = '{%s}';
    foreach ( $replaceList as $key => $val ) {
      $varMap[ sprintf( $pattern, $key ) ] = $val;
    }
    $emailContent = strtr( $body, $varMap );
    //$emailContent .= '<img src="https://www.highzeal.com/track/views?cid=' . $campaign_id . '&tc=' . $token . '" alt="" width="1" height="1">';
    $config[ 'charset' ] = 'utf-8';
    $config[ 'mailtype' ] = 'html';
    $this->email->initialize( $config );

    $this->email->from( 'noreply@highzeal.com', 'Highzeal' );
    $this->email->to( $email );
    $this->email->subject( 'Reset your Highzeal Password' );
    $this->email->message( $emailContent );
    $this->email->send();
    $this->session->set_flashdata( 'msg', 'sent' );
    redirect( 'forgot' );
  }
  public function passwordreset() {
    if ( $_SERVER[ 'REQUEST_METHOD' ] === 'GET' ) {
      $data[ 'title' ] = 'Reset Password';
      if ( $this->input->get( 'token', TRUE ) ) {
        $token_date = $this->user_model->get_token_date( $this->input->get( 'token', TRUE ) );
        if ( empty( $token_date ) || $token_date > time() + 86400 ) {
          $this->load->view( 'account/passwordreset_invalid', $data );
        } else {
          $this->load->view( 'account/passwordreset', $data );
        }
      } else {
        $this->load->view( 'account/passwordreset_invalid', $data );
      }
    }
    if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
      $password = $this->input->post( 'password', TRUE );
      $username = $this->input->post( 'username', TRUE );
      $data = array(
        'password' => md5( $password ),
        'modified_date' => date( 'Y-m-d h:m:s' ),
        'token' => '',
        'token_date' => ''
      );
      $user_id = $this->user_model->get_id( $username );

      $this->user_model->update( $user_id, $data );
      $this->session->set_userdata( 'username', $username );
      $this->session->set_userdata( 'user_id', $user_id );
      $user = $this->user_model->read( $id );
      $this->session->set_userdata( 'role_id', $user->role_id );
      redirect( base_url() );
    }
  }

  public function logout() {
    $data = array(
      'user_id' => $this->session->userdata( 'user_id' ),
      'session_id' => session_id(),
      'ip' => $_SERVER[ 'REMOTE_ADDR' ],
      'event' => 'Log Out',
      'created_date' => date( 'Y-m-d H:i:s' )
    );
    $this->db->insert( 'user_log', $data );
    $data = $this->session->all_userdata();
    foreach ( $data as $row => $rows_value ) {
      $this->session->unset_userdata( $row );
    }
    redirect( base_url() );
  }


  public function check_username_availability() {
    if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
      $this->form_validation->set_rules( 'email', 'Email', 'required' );

      if ( $this->form_validation->run() == FALSE ) {
        echo 'false';
      } else {
        $userid = $this->input->post( 'userid', TRUE );

        if ( $this->user_model->username_count( $userid ) > 0 ) {
          echo 'false';
        } else {
          echo 'true';
        }
      }
    }
  }

  public function check_username() {
    $username = $this->input->post( 'username', TRUE );
    if ( $this->user_model->username_count( $username ) > 0 ) {
      echo 'true';
    } else {
      echo 'false';
    }
  }
}