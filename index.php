<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<link rel="stylesheet" href="style.css" type="text/css" />-->
        <title></title>
    </head>
    <body>
        <!--  Exemples de balises div      
               <div style="position: absolute; left: 150px; top: 200px; border-style: solid; width: 100px; height: 200px;   background-color: green; border-color: green">  </div>
               <div style="position: absolute; left: 180px; top: 230px; border-style: solid; background-color: blue; border-color: blue; width: 200px; height: 200px;">  </div>
                 
               <div style="position: absolute; left: 400px; top: 290px; border-style: solid; background-color: aquamarine; border-color: bisque; width: 200px; height: 200px;">  </div>
        -->


        <?php
       

        
        
        
        require("rectangle.php");

        if (isset($_POST["x"], $_POST["y"], $_POST["L"], $_POST["H"], $_POST["fond"], $_POST["bord"])) {
            $p = new point($_POST["x"], $_POST["y"], "black");
            $p->afficherDiv();

            $r = new rectangle($p, $_POST["L"], $_POST["H"], $_POST["fond"], $_POST["bord"]);
            $r->afficherDiv();
        }
        ?>
        <form action="index.php" method="post">
            <label> x </label>
            <input type="text" name="x" />
            <label> y </label>
            <input type="text" name="y" />
            <label> L </label>
            <input type="text" name="L" />
            <label> H </label>
            <input type="text" name="H" />
            <label> fond </label>
            <input type="text" name="fond" />
            <label> bord </label>
            <input type="text" name="bord" />
            <br />
            <input type="submit" value="Valider" />
        </form>  


    </body>
</html>
