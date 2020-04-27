<?php require("user.php"); ?>

<html>
    <head>
    </head>
    <body>
        <?php echo "<h1>Bienvenu dans l'arrene</h1>";
            $Utilsateur1 = new user();

        ?>
           <form method="POST" action="">
                <input type="text" name="nom" value=''>
                <input type="text" name="mdp" value=''>
                <input type="submit" value="ok">
           </form>

           <?php
               
                
           ?>
    </body>
</html>
