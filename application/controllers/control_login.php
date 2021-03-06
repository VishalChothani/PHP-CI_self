<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class control_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->form();
	}

	public function form()
	{
		$this->load->view("register_form");
	}

	function do_upload()
	{
		echo "in";
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			
			$data['photo'] = $this->upload->display_errors();
			echo $data['photo'];
			//print_r($data['photo']);
			//$this->load->view('register_form');
		}
		else
		{
			//$this->reg_form_process();
			$data = array('upload_data' => $this->upload->data());
			echo "in2".$data;
			$this->load->view('upload_success', $data);
		}
	}

	public function calender()
	{
	}


	public function reg_form_process()
	{
		// Device
		
		$this->load->library('session');
		$this->load->library('user_agent');

		if ($this->agent->is_browser())
		{
			$data['agent'] = $this->agent->browser().' '.$this->agent->version();
		}
		elseif ($this->agent->is_robot())
		{
			$data['agent'] = $this->agent->robot();
		}
		elseif ($this->agent->is_mobile())
		{
			$data['agent'] = $this->agent->mobile();
		}
		else
		{
			$data['agent'] = 'Unidentified User Agent';
		}

		// Personal Information

		$data['username'] = $_POST['username'];
		//password
		$data['password'] = $_POST['password'];
		$this->load->helper('security');
		$data['password'] = do_hash($data['password'], 'md5');

		$data['email'] = $_POST['email'];
		$data['photo'] = "Image Successfully inserted";

		$this->load->library('calendar');
		$m = $_POST['birthMonth'];
		$d = array($_POST['birthDay']=>"");
		$y = $_POST['birthYear'];
		$data["calender"] = $this->calendar->generate($y,$m,$d);

		$this->output->cache(5);


		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('register_form');
		}
		else
		{
			
			$this->load->helper('file');
			$data1 = 'Some file data';
			$data2 = implode($data,",");

			if ( ! write_file('files/file_data.txt', $data2))
			{
				 $data['file']='Unable to write the file';
			}
			else
			{
				 $data['file']='File written!';
			}

			$this->load->view("view_display",$data);
		}
	}

}
