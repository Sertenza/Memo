<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>on test, on fera un copier coller</title>
    </head>
    <body>
        
     <style>
           /* Popup container */
           #overlay2{

    display: none;
    position: fixed;
    top:0; right:0; bottom:0; left:0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;

}
/*ouverture du pop-up*/
#overlay2:target{
    display: block;

}

/*position, taille  du pop-up */
#overlay2 a{

    font-weight: bold;
    padding: 100px 70px;
    background-color: white;
    position: absolute;
    top: 25%;
    left: 50%;
}

.gauche {
    position : absolute;
    left: 25%;
}

.droite {
    position : absolute;
    right : 25%;
}
        
        </style>
        
    <div id="overlay2">
        <a href="Memo.php">
          <ul class="Niveau">
              <p>Niveau de jeu</p>
              <li href="Memo.php">Facile</li>
              <li href="Memo.php">Moyen</li>
              <li href="Memo.php">Difficile</li>
          </ul>
        </a>
    </div>   

<ul class="gauche">
    
    <li><a href="#overlay2"> Alphabet </a></li>
    <li><a href="#overlay2"> Animaux </a></li>
    <li><a href="#overlay2"> Anglais </a></li>

</ul>
      
<ul class="droite">

    <li><a href="#overlay2"> Histoire </a></li>
    <li><a href="#overlay2"> Multiplication </a></li>
    <li><a href="#overlay2"> Sport </a></li>

</ul>
       <?php
        ?>
     
    </body>
</html>
