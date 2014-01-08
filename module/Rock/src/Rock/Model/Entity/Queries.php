<?php

namespace Rock\Model\Entity;

use Zend\Db\TableGateway\AbstractTableGateway,
    Zend\Db\Adapter\Adapter,
    Zend\Db\ResultSet\ResultSet;

class Queries extends AbstractTableGateway {

    public function __construct(Adapter $adapter) {
        $this->adapter = $adapter;
    }

    public function getData() {

        $statement = $this->adapter->query("call test();");
        $result = $statement->execute();

        $resultSet = new ResultSet;
        $resultSet->initialize($result);

        return $resultSet;
    }

}
