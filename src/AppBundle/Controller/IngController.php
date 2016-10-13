<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;
use ChocolateFactory\Csv;
use Symfony\Component\Debug\DebugClassLoader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Khill\Lavacharts\Lavacharts;

class IngController extends Controller
{
    /**
    * @Route("/ing/index")
    */
    public function indexAction()
    {
        Csv::init('sgsag');
        // replace this example code with whatever you need
        $lava = new Lavacharts;
        return $this->render('ing/index.html.php');
    }
}
