<?php

namespace Application;

/**
 * @MappedSuperclass
 * @Entity(repositoryClass="Application\AnimalRepository")
 * @Table(name="T_ANIMAL")
 */
class Animal {


    /**
     * @Column
     * @Id
     */
    public $id;

    /**
     * @Column
     */
    public $name;

}