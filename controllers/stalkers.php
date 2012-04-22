<?php

class Stalkers extends Controller {

	function Stalkers()
	{
		parent::Controller();
	}

function index()
{
	$this->load->model('ldata');
	$this->ldata->load_db();
	$this->loadPage();
}

function loadNotes()
{
	$all = $this->ldata->get_all();
	return $all;
}

function loadPage()
{

	$this->load->view('header');

	$all = $this->loadNotes();

	foreach($all as $data)
	{
		$this->load->view('allViewers', $data);
	}
}
}