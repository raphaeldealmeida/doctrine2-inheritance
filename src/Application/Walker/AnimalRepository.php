<?php
namespace Application\Walker;
use Doctrine\ORM\EntityRepository;

class AnimalRepository extends \Application\AnimalRepository {

    public function walkers()
    {
        $query = $this->_em->createQuery('SELECT a from Application\Walker\Animal where a.legs > 0');
        return $query->getResult();
    }

}