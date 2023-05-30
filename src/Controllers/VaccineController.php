<?php
namespace ml\laege\Controllers;

use fix\db\PDO;

class VaccineController
{

    public static function getAllVacc() : array
    {
        $stmnt = PDO::getInstance()->prepare("SELECT * FROM WMS.vaccine;");
        $stmnt->execute([]);
        $result = $stmnt->fetchAll();

        return $result;
    }






}