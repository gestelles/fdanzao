<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	}


    private function loadForm($user) {
		$this->form_validation->set_rules('nickname', 'lang:nickname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|callback_check_email');
		$this->form_validation->set_rules('country', 'lang:country', 'trim|required|xss_clean');
		$this->form_validation->set_rules('state', 'lang:state', 'trim|required|xss_clean');

		$user->username = trim($this->input->post('nickname'));
		$user->password = $this->input->post('email');
    }

	public function signup() {
		/*
		$this->form_validation->set_rules('nickname', 'Nickname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|email');
		$this->session->set_userdata('nickname', $this->input->post('nickname'));
		$this->session->set_userdata('email', $this->input->post('email'));
		*/		

		//This method will have the credentials validation
		$this->load->model('usermodel','',TRUE);
		$this->load->library('form_validation');
		$this->load->helper('language');
		$this->load->library('email');

		$current = $this->usermodel->new_instance();
		$this->loadForm($current);
		// Valida el usuario
		if ($this->form_validation->run()) {
			try {
			$this->usermodel->save($current);
			exit();
			redirect('user/profile', 'refresh');
			} catch (Exception $ex) {
				echo $ex->get_message();
				exit();
			}
		    
		} else {
			$this->sendEmail();

			$data['countries'] = $this->usermodel->countries();
			$data['pagina'] = 'user/signup-form';
			$this->load->view('layout', $data);
		}

/*

		if(isset($_POST['submit']))  {

			
			// recoge POSTs
		   $nick = $this->input->post('nickname');
		   $email = $this->input->post('email');
	       $sess_array = array(
	         'username' => $email,
	         'nick' => $nick
	       );
		   $this->session->set_userdata('userdata', $sess_array);
		   redirect('user/signup', 'refresh');
		}


		if (isset($_POST('submit'))) {
			// Comprueba los campos son correctos.
		}
		
		$this->load->view('layout', $data);
		*/
	}

	private function sendEmail() {
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.orodirect.local',
            //'smtp_port' => 465, // SSL
            'smtp_user' => 'profesionales@orodirect.es',
            'smtp_pass' => 'gpr17OR12',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            //'smtp_crypto' => 'tls',
            'newline' => "\r\n");

            $this->email->initialize($configGmail);
			$this->email->clear();
			$this->email->from('profesionales@orodirect.es', 'Oro Direct');
			$this->email->to('gonzalo.estelles@orodirect.es');
			$this->email->subject('Confirmación de alta');
			$this->email->message('<html><body><h1>Hola!</h1></body></html>');
			$this->email->send();
	}

	public function verifyLogin()
	{
	   //This method will have the credentials validation
	   $this->load->library('form_validation');

	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_email');
	   $this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');


	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.&nbsp; User redirected to login page
	     $this->load->view('login_view');
	   }
	   else
	   {
	     //Go to private area
	     redirect('profile', 'refresh');
	   }
	}

	function check_email($email) {

	   //Field validation succeeded.&nbsp; Validate against database
	   $username = $this->input->post('email');
	   $existe = $this->usermodel->checkuser($username);	
	   if ($existe) return FALSE;
	   else {
	     $this->form_validation->set_message('check_email', 'Username exists');
	     return TRUE;
	   }
/*
	   //query the database
	   $result = $this->user->login($username, $password);

	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'id' => $row->id,
	         'username' => $row->username
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	   */
	 }

	 public function states($id_pais) {
		$countries = $this->usermodel->states($id_pais);
		//header('Content-Type: application/json; charset=utf-8');
		//echo json_encode(array('response' => $countries));
		//exit();
		/*$this->output
			->set_header('charset=utf-8')
			//->set_output(json_encode($countries));
		    ->set_content_type('application/json');
		    //->set_output(json_encode($countries));
			echo json_encode($countries);
			exit();
			*/
		//$countries = '[{"d":"dd"}]';
		$this->output
			//->set_content_type('application/json')
			//->set_header('Content-Type: application/json; charset=utf-8')
			->set_content_type('text/plain')
			->set_output(json_encode($countries));
			//->set_output(utf8_encode(json_encode($countries)));
		//$data['json'] = trim(json_encode($countries));
        //$this->load->view('json_view', $data);
	 }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */