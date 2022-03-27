<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
    class User
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
        private $username;
        
     /**
     * @ORM\Column(type="string")
     */
        private $email;
      /**
     * @ORM\Column(type="string")
     */
        private $password;
        
         
        public function __construct(){

        }

        
        
        public  function getId(){
            return $this->id;
        }
        public  function setId($id){
            $this->id=$id;
        }

        public  function getUsername(){
            return $this->username;
        }
        public  function setUsername($username){
            $this->username=$username;
        }

        public  function getEmail(){
            return $this->email;
        }
        public  function setEmail($email){
            $this->email=$email;
        }

        public  function getPassword(){
            return $this->password;
        }
        public  function setPassword($password){
            $this->password=$password;
        }

    }
    

?>