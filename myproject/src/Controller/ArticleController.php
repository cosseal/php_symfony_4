<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class ArticleController extends AbstractController
{
    /**
     * @Route("/home", name="app_homepage")
     */


    public function homepage()
    {
        return $this->render('article/home.html.twig');
    }


    /**
     * @Route("articles/{titre}", name="article_show")
     */
    public function show($titre)
    {
//        return new Response("mon article ayant pour titre ".$titre." s'affiche");

        $comments =["commentaire 1", "commentaire2", "commentaire3"];
        return $this->render("article/show.html.twig",
            ["titre"=>$titre,"maVariable"=>"test","comments"=>$comments] );
    }

/**
 * @route("articleCreate", name="article_create")
 */

public function create()
{
//    return new Response('ca fonctionne');

    $entityManager = $this->getDoctrine()->getManager();

    $article = new Article();
    $article->setTitle("mon premier article");
    $article->setContent("le contenu de mon premier article");

    $entityManager->persist($article);

    $entityManager->flush();

    return new Response('Article a été sauvegardé avec id = '.$article->getId());

//    return $this->render("article/show.html.twig");
}

/**
 * @route("article/{id}", name="article_show_from_db")
 */

public function showFromDB(Article $article)
    {

        $comments =["commentaire 1", "commentaire2", "commentaire3"];
        return $this->render("article/show.html.twig",
            ["titre"=>$article->getTitle(),
                "contenu"=>$article->getContent(),
                "comments"=>$comments] );
    }


}