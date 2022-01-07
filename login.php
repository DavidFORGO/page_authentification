<?php
   // require('config.php');
    //session_start();
    
    $con = mysqli_connect('localhost', 'root', 'forgo2002','formulaire');
    if(isset($_POST['save'])){
        $Name = mysqli_real_escape_string($con, $_POST['nom']) ;
        //$Pass = $_POST['mdp'];
        $Pass = mysqli_real_escape_string($con, $_POST['mdp']) ;
        $query= "SELECT * FROM inscription WHERE username='$Name'";
        $por= "SELECT * FROM inscription WHERE password='$Pass'";
        $res = mysqli_query($con,$query);
        $rer = mysqli_query($con,$por);
        if(mysqli_num_rows($res) > 0 && mysqli_num_rows($rer)>0){
                echo "Bienvenue, $Name";
            }else {
                echo "login not successful";
            }

        }
?>
<!DOCTYPE html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body >
    <form  method="POST" >
        <fieldset> 
        <legend><h2>Connexion</h2></legend>
        <div >
        username:<input type="text" name="nom" id="nom" placeholder="nom d'utilisateur" length="600px"/><br>
        <br>password:<input type="password" name="mdp" id="mdp" placeholder="mot de passe" length="600px"/><br>
        <br><input type="submit" name="save" id="save" value="Login"/><br>
        </div>
        </fieldset>
        <br><p>Vous êtes nouveau ici? <a href="inscription.html">S'inscrire</a></p><br>
    
    </form>
    </body>
</html>