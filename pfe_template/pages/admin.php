<?php
require_once("DAO.php");
class Admin{
    
    private $Nom;
    private $Email;
    private $Password;

    function __construct($nom,$email,$pswd){
        
        $this->Nom=$nom;
        $this->Email=$email;
        $this->Password=$pswd;
    }

    static function signIn($email,$password){
        $DAO=new DAO();
        if($DAO->sign_In($email,$password)) return true;
        return false;
    }
    static function getEmail(){
        $DAO=new DAO();
        return $DAO->getEmail();
    }


}
?>