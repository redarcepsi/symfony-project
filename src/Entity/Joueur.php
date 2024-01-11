<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Joueur")
 */
class Joueur{
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
    * @ORM\Column(type="string",length=32,nullable=false)
    */
    public $pseudo;
    /**
    * @ORM\Column(type="integer",nullable=false)
    */
    public $age;

    function get_name() {
        return $this->name;
    }
    function get_pseudo(){
        return $this->pseudo;
    }
    function get_age() {
        return $this->age;
    }
    function set_dateSortie($nameinp) {
        $this->dateSortie = $nameinp;
    }
    function set_name($pseudoinp) {
        $this->name = $pseudoinp;
    }
    function set_age($ageinp) {
        $this->type = $ageinp;
    }
}
?>