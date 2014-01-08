<?php

namespace Rock\Model\Entity;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

class Options extends TableGateway {

    public function __construct(Adapter $adapter = null, $databaseSchema = null, ResultSet $selectResultPrototype = null) {
        return parent::__construct('wp_postmeta', $adapter, $databaseSchema, $selectResultPrototype);
    }

    public function getOption() {
        $datos = $this->select();
        return $datos->toArray();
    }

}
