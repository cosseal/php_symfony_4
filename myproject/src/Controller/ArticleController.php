<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/home")
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
//        return new Response("mon article ayant pour titre ".$titre." s'affiche");

        $comments =["commentaire 1", "commentaire2", "commentaire3"];
        return $this->render("article/show.html.twig",
            ["titre"=>$titre,"maVariable"=>"test","comments"=>$comments] );
    }





}