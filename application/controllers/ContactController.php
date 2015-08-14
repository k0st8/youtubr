<?php

/**
*  Contacts 
*/
class ContactController extends CI_Controller
{

	public function index()
	{
		$this->load->view('contact');
	}

	/** 
	* Save conatact form data to CSV
	* in exist data/save-csv-to-mysql.sh
	* that converts CSV to MySQL table
	*/
	public function saveCsv($value='')
	{
		$this->load->helper('url');

		if(!$this->validateContactData()) {
			echo 'Errors in contact form...';
			return false;
		} else {

			$this->load->helper('file');
			$path2file = FCPATH . 'data/contacts.csv';
			$data = implode($this->input->post(), ',')."\n";

			if ( ! write_file($path2file, $data, 'w'))
			{
			     echo 'Unable to write the file';
			}
			else
			{
			     echo 'File written!';
			}
		}

	}
	/**
	* Show all contacts in the Database
	*/
	public function showContacts()
	{
		$this->load->database();
		$query = $this->db->query('SELECT * FROM contacts');

		// Check to see if there are any contacts
		if ($query->num_rows() > 0)
		{
			$data['res'] = $query->result();
		} 
		else // in case there are not contacts
  		{
			$data['error'] = 'No contacts found!';
		}

		$this->load->view('showcontacts', $data);
	}


	private function validateContactData()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		# XSS are filtered Globaly
		$config = array(
               array(
                     'field'   => 'inputName', 
                     'label'   => 'inputName', 
                     'rules'   => 'required|alpha'
                  ),
               array(
                     'field'   => 'inputEmail', 
                     'label'   => 'inputEmail', 
                     'rules'   => 'required|valid_email'
                  ),
               array(
                     'field'   => 'inputSubject', 
                     'label'   => 'inputSubject', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'inputBody', 
                     'label'   => 'inputBody', 
                     'rules'   => 'required'
                  )   
            );

		$this->form_validation->set_rules($config);

		return $this->form_validation->run();
	}
	/**
	* Creates contacts TABLE in database 
	* if application/config/migration.php
	* set 
	* $config['migration_enabled'] = TRUE;
	* disable after migration.
	* 
	* NOTE: Navigate to 
	* ConactController/migrateContacts/
	*/
	public function migrateContacts()
	{
		if ($this->config->item('migration_enabled')){

			$this->load->library('migration');

	        if ($this->migration->current() === FALSE)
	        {
	            show_error($this->migration->error_string());
	        }
		}
	}
}
