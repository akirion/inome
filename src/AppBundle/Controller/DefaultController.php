<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  public function indexAction(Request $request)
  {
    return $this->render('AppBundle:Default:index.html.twig');
  }
  
  public function showPageAction($room)
  {
    return $this->render('AppBundle:Default:page_details.html.twig');
  }
  
  public function settingsAction()
  {
    return $this->render('AppBundle:Default:settings.html.twig');
  }
  
  public function logAction()
  {
    return $this->render('AppBundle:Default:log.html.twig');
  }
  
  public function settingsUsersAction()
  {
    
  }
  
  
}
