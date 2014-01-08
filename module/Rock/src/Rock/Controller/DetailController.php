<?php

namespace Rock\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Rock\Model\Entity\Queries;

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
    
    public function dataAction() {

        $this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter');
        $d = new Queries($this->dbAdapter);
        $valores = array("datos"=>$d->getData());
        
        return new ViewModel($valores);
    }    
    
//    public function dataAction() {
//
//        $this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter');
//        $u = new Options($this->dbAdapter);
//        $valores = array(
//            "titulo" => "Mostrando datos desde TableGateway",
//            'datos' => $u->getOption()
//        );
//        return new ViewModel($valores);
//    }    


}

