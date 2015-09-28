<?php

App::uses('CakeEmail','Network/Email');
App::uses('AppController','Controller');

class ContactsController extends AppController{
	
	public $name ='Contacts';
	public $uses = array();

	public function contact() {
		$this->loadModel('Contact');

	public function index() {
				
	}

}

