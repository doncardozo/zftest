<?php

namespace Rock\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DetailController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function homeAction()
    {
        return new ViewModel();
    }


}

