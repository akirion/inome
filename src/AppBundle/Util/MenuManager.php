<?php

namespace AppBundle\Util;

class MenuManager
{
  public static function getMenu($router,$translate,$user=null)
  {
    $item = new MenuItem();
    $item->setText($translate->trans("Dashboard"));
    $item->setLink($router->generate('app_page',array('page'=>'dashboard'));
    $menu[]=$item;
    
    // Add SiteMap here

      $item = new MenuItem();
      $item->setText($translate->trans("Dashboard"));
      $item->setLink($router->generate('app_page',array('page'=>'dashboard')));
      $menu[]=$item;
    
    $item = new MenuItem();
    $item->setSeparator(true);
    $menu[]=$item;
    // Check whether user is admin
    if(true) {
      // Add Log

      $item = new MenuItem();
      $item->setText($translate->trans("Log"));
      $item->setLink($router->generate('app_log'));
      $menu[]=$item;
    }
    // Add Settings
    $item = new MenuItem();
    $item->setText($translate->trans("Settings"));
    $item->setLink($router->generate('app_settings'));
    $menu[]=$item;
    if(true) {
      
      $item = new MenuItem();
      $item->setSeparator(true);
      $menu[]=$item;
      // User settings
      $subitem = new MenuItem();
      $subitem->setText($translate->trans("Users"));
      $subitem->setLink($router->generate('app_settings_users'));
      $item->addSubmenu($subitem);

      // SiteMap settings
      $subitem = new MenuItem();
      $subitem->setText($translate->trans("SiteMap"));
      $subitem->setLink($router->generate('app_settings_sitemap'));
      $item->addSubmenu($subitem);

      // Rules settings
      $subitem = new MenuItem();
      $subitem->setText($translate->trans("Rules"));
      $subitem->setLink($router->generate('app_settings_rules'));
      $item->addSubmenu($subitem);

      // Device settings
      $subitem = new MenuItem();
      $subitem->setText($translate->trans("Devices"));
      $subitem->setLink($router->generate('app_settings_devices'));
      $item->addSubmenu($subitem);
    }
    $item = new MenuItem();
    $item->setText($translate->trans("Help"));
    $item->setLink($router->generate('app_help'));
    $menu[]=$item;
    return $menu; 
  }
}
