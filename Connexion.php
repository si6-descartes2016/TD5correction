<?php
class Connexion extends PDO {

    /**
     *  Constructeur qui hérite du constructeur de la classe PDO
     */
    public function __construct( ) {
        $this->sgbd = 'mysql';
        $this->hote = 'localhost';
        $this->bd = 'geometrie';
        $this->user = 'root';
        $this->pass = 'root';
        $dns = $this->sgbd.':dbname='.$this->bd.";host=".$this->hote;
        
        //Appel du constructeur parent
        parent::__construct($dns, $this->user, $this->pass, array());
    } 
    
    /**
     * Fonction qui renvoie l'indice maximum de la table point
     * 
     * @return int
     */
    public function calculMax()
    {
            $max=$this->query("Select MAX(numPoint) AS m From point")
                    or die("Connexion PDO: Erreur calcul max");
            foreach ($max as $row)
            {
                  $indiceMax=$row['m'];
            }
            return $indiceMax;
    }
    
    
    public function insertPoint($x,$y, $couleur)
    {
        $InsertPoint = "INSERT INTO point(x,y, couleur) "
                . "VALUES ($x,$y,'$couleur')";
        
        $this->query($InsertPoint) or die("Erreur ajout point:^$InsertPoint");            
    }
}
?>