<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Jeu")
 */
class Jeu{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer",unique=true,nullable=false)
    */
    public $id;
    /** 
    * @ORM\Column(type="string",length=32,nullable=false)
    */
    public $name;
    /**
    * @ORM\Column(type="datetime",nullable=false)
    */
    public $dateSortie;
    /**
    * @ORM\Column(type="string",length=64,nullable=false)
    */
    public $type;

    function get_name() {
        return $this->name;
    }
    function get_dateSortie(){
        return $this->dateSortie;
    }
    function get_type() {
        return $this->type;
    }
    function set_dateSortie($dateSortieinp) {
        $this->dateSortie = $dateSortieinp;
    }
    function set_name($nameinp) {
        $this->name = $nameinp;
    }
    function set_type($typeinp) {
        $this->type = $typeinp;
    }
}
?>