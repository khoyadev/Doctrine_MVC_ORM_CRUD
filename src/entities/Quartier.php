<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="quartier")
 */
    class Quartier 
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
     * Many quartiers have one departement. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Departement", inversedBy="quartiers")
     * @ORM\JoinColumn(name="departement_id", referencedColumnName="id")
     */
        private $departement;
         
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
        public  function getDepartement(){
            return $this->departement;
        }
        public  function setDepartement($departement){
            $this->departement=$departement;
        }
        

    }
    

?>