<?php

namespace Terra\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function showAction()
    {
        return new ViewModel();
    }
    
    public function hideAction()
    {
        return new ViewModel();
    }


}

