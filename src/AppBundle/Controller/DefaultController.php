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
  
  public function showPageAction($page_id)
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
    return $this->render('AppBundle:Default:settings_users.html.twig');
  }
  
  public function settingsUserDetailsAction($user_id)
  {
    return $this->render('AppBundle:Default:settings_user_details.html.twig');
  }  
  
  public function settingsSiteMapAction()
  {
    return $this->render('AppBundle:Default:settings_sitemap.html.twig');
  }
  
  public function settingsRulesAction()
  {
    return $this->render('AppBundle:Default:settings_rules.html.twig');
  }
  
  public function settingsDevicesAction()
  {
    return $this->render('AppBundle:Default:settings_devices.html.twig');
  }
  

}
