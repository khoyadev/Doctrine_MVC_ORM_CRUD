<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="entreprise")
 */
    class Entreprise 
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
        private $coordonnees;
         /**
     * @ORM\Column(type="string")
     */
        private $ninea;
         /**
     * @ORM\Column(type="string")
     */
        private $rccm;
         /**
     * @ORM\Column(type="date")
     */
        private $date_creation;
         /**
     * @ORM\Column(type="string")
     */
        private $page_web;
         /**
     * @ORM\Column(type="integer")
     */
        private $nombre_employe;
         /**
     * @ORM\Column(type="boolean")
     */
        private $organigramme;
         /**
     * @ORM\Column(type="boolean")
     */
        private $cotisations_sociales;
         /**
     * @ORM\Column(type="boolean")
     */
        private $contrat;
   
         /**
     * Many entreprises have one repondant. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Repondant", inversedBy="entreprises")
     * @ORM\JoinColumn(name="repondant_id", referencedColumnName="id")
     */
        private $repondant;
         /**
     * Many entreprises have one domaine. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Domaine", inversedBy="entreprises")
     * @ORM\JoinColumn(name="domaine_id", referencedColumnName="id")
     */
        private $domaine;
             /**
     * Many entreprises have one dispositif. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Dispositifs_de_formation", inversedBy="entreprises")
     * @ORM\JoinColumn(name="dispositif_id", referencedColumnName="id")
     */
        private $dispositif;
             /**
     * Many entreprises have one regime. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Regime", inversedBy="entreprises")
     * @ORM\JoinColumn(name="regime_id", referencedColumnName="id")
     */
        private $regime;
             /**
     * Many entreprises have one quartier. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Quartier", inversedBy="entreprises")
     * @ORM\JoinColumn(name="quartier_id", referencedColumnName="id")
     */
        private $quartier;
         
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
        public  function getCoordonnees(){
            return $this->coordonnees;
        }
        public  function setCoordonnees($coordonnees){
            $this->coordonnees=$coordonnees;
        }
        public  function getNinea(){
            return $this->ninea;
        }
        public  function setNinea($ninea){
            $this->ninea=$ninea;
        }

        public  function getRccm(){
            return $this->rccm;
        }
        public  function setRccm($rccm){
            $this->rccm=$rccm;
        }

        public  function getDateCreation(){
            return $this->date_creation;
        }
        public  function setDateCreation($date_creation){
            $this->date_creation=$date_creation;
        }

        public  function getPageWeb(){
            return $this->page_web;
        }
        public  function setPageWeb($page_web){
            $this->page_web=$page_web;
        }

        public  function getNombreEmploye(){
            return $this->nombre_employe;
        }
        public  function setNombreEmploye($nombre_employe){
            $this->nombre_employe=$nombre_employe;
        }

        public  function getOrganigramme(){
            return $this->organigramme;
        }
        public  function setOrganigramme($organigramme){
            $this->organigramme=$organigramme;
        }

        public  function getCotisationsSociales	(){
            return $this->cotisations_sociales	;
        }
        public  function setCotisationsSociales	($cotisations_sociales	){
            $this->cotisations_sociales	=$cotisations_sociales	;
        }

        public  function getContrat(){
            return $this->contrat;
        }
        public  function setContrat($contrat){
            $this->contrat=$contrat;
        }

        public  function getRepondant(){
            return $this->repondant;
        }
        public  function setRepondant($repondant){
            $this->repondant=$repondant;
        }

        public  function getDomaine(){
            return $this->domaine;
        }
        public  function setDomaine($domaine){
            $this->domaine=$domaine;
        }

        public  function getDispositif(){
            return $this->dispositif;
        }
        public  function setDispositif($dispositif){
            $this->dispositif=$dispositif;
        }

        public  function getRegime(){
            return $this->regime;
        }
        public  function setRegime($regime){
            $this->regime=$regime;
        }

        public  function getQuartier(){
            return $this->quartier;
        }
        public  function setQuartier($quartier){
            $this->quartier=$quartier;
        }

    }
    

?>