<?php 

namespace App\Controller ; 

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;



class QuestionController 
{
    public function homepage ()
    {
    /**
     * @Route("/")
    */
        return new Response("what a bewitching control !");  

    }



    /**
     * @Route("/questions/{slug}")
     */
    public function show ($slug)
    {
        return new Response(sprintf(
            'Future page to show a question"%s"!',
        $slug
        ));
    }
}