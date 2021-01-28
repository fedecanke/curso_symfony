<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Request;


class testController extends AbstractFOSRestController
{
	/**
	* @Rest\Get("/prueba")
	*/
    public function prueba(Request $request)
    {
        $name = "Un Nombre";
		$apellido = "Un Apellido";
		
		return $this->render("test.html.twig", [
		'page_title' => 'Un Titulo',
		'nombre' => $name,
		'apellido' => $apellido,
		]);
    }
	
	/**
	* @Rest\Route("/prueba2")
	*/
    public function prueba2(Request $request)
    {
		die("Good By World");
    }
}