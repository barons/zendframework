<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    // _init gaat hij altijd automatisch gaan laden
    public function _initNavigation(){
        
        // maak de frontcontroller beschikbaar in de bootstrap
        // de frontcontroller ophalen
        $this->bootstrap('frontController');
        $front = $this->getResource('frontController');
        // registreer de Navigation plugin
        $front->registerPlugin(new Syntra_Controller_Plugin_Navigation());
        
    }

}

