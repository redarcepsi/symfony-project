<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Run")
 */
class Run{
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
    public $dateRealisation;
    /**
    * @ORM\Column(type="string",length=64,nullable=false)
    */
    public $type;
    /**
    * @ORM\Column(type="string",length=16,nullable=false)
    */
    public $time;
    /**
    * @ORM\Column(type="integer",nullable=false)
    */
    private $Joueurid;
    /**
    * @ORM\Column(type="string",length=32,nullable=false)
    */
    private $Jeuid;
    /**
     * @OneToOne(targetEntity="Joueur")
     * @JoinColum(name="Joueurid", referencedColumnName="id")
     */
    /**
     * @OneToOne(targetEntity="Jeu")
     * @JoinColum(name="Jeuid", referencedColumnName="id")
     */

    public function __construct() {
        $this->Joueurid = new Joueur();
        $this->Jeuid = new Jeu();
    }


    function get_name() {
        return $this->name;
    }
    function get_dateRealisation(){
        return $this->dateRealisation;
    }
    function get_type() {
        return $this->type;
    }
    function get_time() {
        return $this->time;
    }
    function set_dateSortie($dateRealisationinp) {
        $this->dateRealisation = $dateRealisationinp;
    }
    function set_name($nameinp) {
        $this->name = $nameinp;
    }
    function set_type($typeinp) {
        $this->type = $typeinp;
    }
    function set_time($timeinp) {
        $this->time = $timeinp;
    }
}
?>