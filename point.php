<?php
/**
 * Description of point
 *
 * @author Clem
 */
class point {
    private $x;
    private $y;
    private $couleur;
    
    /**
     * Constructeur magique de la classe point
     * 
     * @param int $x
     * @param int $y
     * @param string $couleur
     */
    function __construct($x, $y, $couleur) {
        $this->x = $x;
        $this->y = $y;
        $this->couleur = $couleur;
    }

    function __get($prop)
    {
        return $this->$prop;
    }
    
    function setCouleur($color)
    {
        $this->couleur=$color;
    }
    
    function afficher()
    {
        echo '<div style="color:'.$this->couleur.'"> '; //Couleur en CSS
        echo $this->x, ",", $this->y;                   //Coordonnées
        echo ':'.$this->couleur.'</div>';               //Couleur du texte
    }
    
    function afficherDiv()
    {
        echo '<div style="position: absolute; left: '.$this->x.'px; top: '.$this->y.'px; color: '.$this->couleur.'">o</div>';
    }
    
    
}

