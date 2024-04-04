<?php
namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="test_homepage")
     */
    public function indexAction()
    {
        return $this->render('views/Default/index.html.twig');
    }
}
