<?php

namespace Application\Walker;

/**
 * @Entity(repositoryClass="Application\Walker\AnimalRepository")
 * @Table(name="T_ANIMAL")
 */
class Animal extends \Application\Animal {

    /**
     * @Column
     */
    public $legs;
}