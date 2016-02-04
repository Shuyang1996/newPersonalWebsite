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
	/**
	*@Route("/project")
	*/
	public function projectPageAction(){
		return $this->render('project.html.twig');
	}

	/**
	*@Route("/project/projectDLD")
	*/
	public function projectDLDAction(){
		return $this->render('projectDLD.html.twig');
	}

	/**
	*@Route("/project/projectWebsite")
	*/
	public function projectWebsiteAction(){
		return $this->render('projectWebsite.html.twig');
	}
}