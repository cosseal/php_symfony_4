<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */


    public function homepage()
    {
        return new Response("test");
    }


    /**
     * @Route("articles/{titre}")
     */
    public function show($titre)
    {
        return new Response("mon article ayant pour titre ".$titre." s'affiche");
    }


}