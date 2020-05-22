<?php
class Master_template extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function agus()
{
	$data="";
	$this->template($data);
}

function template($data)
{
    $this->load->view('master', $data);
}

}