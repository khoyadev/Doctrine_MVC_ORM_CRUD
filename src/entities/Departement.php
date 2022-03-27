<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="departement")
 */
    class Departement 
    {
           /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
        private $id;
         /**
     * @ORM\Column(type="string")
     */
        private $nom;
        
         /**
     * Many departements have one region. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Region", inversedBy="departements")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
        private $region;
         
        public function __construct(){

        }

        
        
        public  function getId(){
            return $this->id;
        }
        public  function setId($id){
            $this->id=$id;
        }

        public  function getNom(){
            return $this->nom;
        }
        public  function setNom($nom){
            $this->nom=$nom;
        }
        public  function getRegion(){
            return $this->region;
        }
        public  function setRegion($region){
            $this->region=$region;
        }
        

    }
    

?>