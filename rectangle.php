<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rectangle
 *
 * @author Clem
 */

require 'point.php';

class rectangle {
    private $point_haut_gauche;
    private $largeur;
    private $hauteur;
    
    private $couleur_fond;
    private $couleur_bord;
    
    
    function __construct(point $point_haut_gauche, $largeur, $hauteur, $couleur_fond, $couleur_bord) {
        $this->point_haut_gauche = $point_haut_gauche;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->couleur_fond = $couleur_fond;
        $this->couleur_bord = $couleur_bord;
    }
    
    public function afficher()
    {   
        echo "Rectangle:";
        $this->point_haut_gauche->afficher();
        echo "Largeur:".$this->largeur."<br/>";
        echo "Hauteur:",$this->hauteur,"<br/>";
    }
    
   
    public function afficherDiv()
    {
        echo '<div style="position: absolute; '
                . 'left: '.$this->point_haut_gauche->x.'px; '
                . 'top: '.$this->point_haut_gauche->y.'px; '
                . 'border-style: solid; '
                . 'background-color: '.$this->couleur_fond.'; '
                . 'border-color: '.$this->couleur_bord.'; '
                . 'width: '.$this->largeur.'px; '
                . 'height:'.$this->hauteur.'px;">  </div>';
    }

}

?>
