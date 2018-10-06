<?php
/**
 * Created by PhpStorm.
 * User: camar
 * Date: 06/10/2018
 * Time: 00:30
 */
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class ImportCsvServiceTest extends WebTestCase
{
    public function testNormaliserName()
    {
        $client = static::createClient();
        $container = $client->getContainer();

        $import = $container->get('toc_import.importcsv');

        $data = 'data';
        $res = 'data.csv';
        $resultat = $import->normalizeName($data);

        $this->assertSame($res,$resultat);

    }
}