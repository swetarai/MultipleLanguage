<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class language for display the data for multiple language 
 */
class Language extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('language_model');
		//$this->lang->load('contact_form','english');
	}

	/**
	 * index method for initialize the session data for languages
	 * @return resource return the language content through session
	 */
	public function index()
	{
		$data['content'] = $this->load->view('contact', '',TRUE);

		$this->load->view('layout/default', $data);
	}

	/**
	 * identify the language which user is selected
	 * @param  string $value language value
	 * @return resource        
	 */
	public function select_lang($language='')
	{
		$language = ($language != "") ? $language : $value;
        $this->session->set_userdata('site_lang', $language);
        $site_Lang = $this->session->userdata('site_lang');
		
		redirect($_SERVER['HTTP_REFERER']);
	}

	/**
	 * insert data into database
	 */
	public function add()
	{
		if(!empty($this->input->post()))
		{
			$data = array('ne_lang' => $this->input->post('ne_lang'),
						'ne_msg' => $this->input->post('ne_msg'),
						'ne_name' => $this->input->post('ne_name'));

			if($id = $this->language_model->add('ci_news', $data))
			{

			 	$this->session->set_flashdata('message', 'Insert Success');

				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('message', 'Success Failed');

				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
}
