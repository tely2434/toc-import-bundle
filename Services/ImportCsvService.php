<?php
/**
 * Created by PhpStorm.
 * User: camar
 * Date: 05/10/2018
 * Time: 23:53
 */
namespace TOC\ImportBundle\Services;

class ImportCsvService
{



    public function normalizeName($name)
    {
        $result = $name.'.csv';
        return $result;
    }

}