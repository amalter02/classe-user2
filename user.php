<?php
class user{
    //propriété :
    private $_nom;
    private $_mdp;

 public function verifMpd($nom,$mdp){
    if($nom == $this->nom){
        if($mdp == $this->mdp){
            try{
            //execution du code sur la BDD exemple
        $maBase=new PDO('mysql:host=127.0.0.1; dbname=exot; charset=utf8','root', 'root');
        echo "select * from 'user' where nom and mdp" ;
        $ResultRequet = $maBase->query("select * from 'user' where nom and mdp"); 
        echo "<table>";
        while ($TableauDeDonnee = $ResultRequet->fetch())
            {
                return true;
            }
            if (isset($_POST['nom'])){
                $isConnect = $Utilsateur1->verifMpd($_POST['nom'],$_POST['mdp']);
                if($isConnect){echo "connecté";
              
            }
        }
            $ResultRequet->closeCursor();
            echo "</table>";

    }
    catch (Exception $erreur){
        echo $erreur->getMessage();
     }
           
    }
    }

    return false;
}
}
 
?>