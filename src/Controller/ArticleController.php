<?php
/**
 * Created by PhpStorm.
 * User: emmanuelabola
 * Date: 27/03/2018
 * Time: 15:06
 */

namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('OMG! My first page already!Wooo');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug
            ));
    }

}