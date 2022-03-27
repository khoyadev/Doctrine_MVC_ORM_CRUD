<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="repondant")
 */
    class Repondant
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
     * @ORM\Column(type="string")
     */
        private $prenom;
      /**
     * @ORM\Column(type="string")
     */
        private $telephone;
        
         /**
     * @ORM\Column(type="string")
     */
        private $courriel;
        


         /**
     * Many repondants have one fonction. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Fonction", inversedBy="repondants")
     * @ORM\JoinColumn(name="fonction_id", referencedColumnName="id")
     */
        private $fonction;
         
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

        public  function getPrenom(){
            return $this->prenom;
        }
        public  function setPrenom($prenom){
            $this->prenom=$prenom;
        }

        public  function getTelephone(){
            return $this->telephone;
        }
        public  function setTelephone($telephone){
            $this->telephone=$telephone;
        }

        public  function getCourriel(){
            return $this->courriel;
        }
        public  function setCourriel($courriel){
            $this->courriel=$courriel;
        }
        public  function getFonction(){
            return $this->fonction;
        }
        public  function setFonction($fonction){
            $this->fonction=$fonction;
        }
        

    }
    

?>