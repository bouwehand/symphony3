<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IngController extends Controller
{
    /**
    * @Route("/ing/index")
    */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('ing/index.html.php');
    }
}
