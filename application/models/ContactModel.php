<?php

class ContactModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function preDataSave()
    {
    	// $row = 1;
    	// $handle = fopen('contact-mgs.csv', "a+");

    	// fputcsv($fp,array(array($name,$date)));
    }
}