<?php

class Viewers extends Controller {

	function Viewers()
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

function newNote()
{
	$content = $this->input->post("content");

	$this->load->model('mnotes');
	$this->mnotes->load_db();

	$this->mnotes->submit($content);

	$this->loadPage();
}
}