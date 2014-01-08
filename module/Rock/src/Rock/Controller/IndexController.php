<?php

namespace Rock\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
#use Zend\Db\Adapter\Adapter;
use Rock\Model\Entity\Options;

class IndexController extends AbstractActionController {

    public function indexAction() {

        $this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter');
        $u = new Options($this->dbAdapter);
        $valores = array(
            "titulo" => "Mostrando datos desde TableGateway",
            'datos' => $u->getOption()
        );
        return new ViewModel($valores);
    }

}
