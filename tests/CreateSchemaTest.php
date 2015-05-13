<?php
class CreateSchemaTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate(){

        $entitiesDirectories = [__DIR__ .'/../src'];

        $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($entitiesDirectories, true);

        $dbParams = array(
            'driver' => 'pdo_sqlite',
            'path' => 'database.sqlite',
            'memory'    => true,
        );

        $em = \Doctrine\ORM\EntityManager::create($dbParams, $config);


        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
        $tool->dropDatabase();
        $tool->createSchema($em->getMetadataFactory()->getAllMetadata());


        $this->assertEquals(1,
            $em->getConnection()->query("SELECT count(*) tables FROM sqlite_master WHERE type='table'")->fetch()['tables'],
            'More than one table created');
    }
}