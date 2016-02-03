<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class welcomeController extends Controller{
	/**
	*@Route("/")
	*/
	public function frontpageAction(){
		// return new response('<html><p>Welcome to the first page</p></html>');
		return $this->render('test.html.twig');
	}
	/**
	*@Route("/signUp")
	*/
	public function signUppageAction(){
		return new response('<html><p>Hi,you suck!</p></html>');
	}
}