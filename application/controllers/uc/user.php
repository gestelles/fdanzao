<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

 function __construct() {
   parent::__construct();
 }

 function preSignUpForm() {
   $this->load->view('pre_sign_up_form');
 }
 
 function index() {
   $this->load->helper(array('form'));
   $this->load->view('login_view');
 }

}
?>

