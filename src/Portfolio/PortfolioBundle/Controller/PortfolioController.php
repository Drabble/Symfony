<?php

namespace Portfolio\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PortfolioController extends Controller
{
  public function indexAction()
  {
    return $this->render('PortfolioPortfolioBundle:Portfolio:index.html.twig');
  }
}
?>