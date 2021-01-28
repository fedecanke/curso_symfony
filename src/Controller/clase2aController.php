<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Request;


class clase2aController extends AbstractFOSRestController
{
	/**
	* @Rest\Get("/clase2a")
	*/
    public function clase2a(Request $request)
    {
        $postsArray = array();
		for ($i = 1; $i <= 20; $i++) {
			$post["title"] = "Un Titulo ".$i;
			$post["content"] = "Un Contenido ".$i;
			$postsArray[] = $post;
		}

		return $this->render("clase2a.html.twig", [
		'posts' => $postsArray
		]);
    }
	
	/**
	* @Rest\Route("/clase2b")
	*/
    public function clase2b(Request $request)
    {
		return $this->render("clase2b.html.twig", [
		'variable' => 10
		]);
    }
}