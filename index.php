<!DOCTYPE HTML>
<html>
    <head>
        <title>Exemple</title>
    </head>
    <body>
        <?php
        function form(){
        ?>
        
        <form  action="index.php" method="post" >
            <h2>Connexion :</h2>
            <label>username</label>
            <input name="user" type="text">
            <label for="">mot de passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="envoyer">
        </form>
        <?php
        }
       
        
            if(!isset($_POST['user'])){
                form();

        
            }elseif($_POST['user'] != 'admin' && $_POST['mdp'] != 'admin'){
                echo '<h1>Le login et/ou mot de passe est incorrect</h1>'; 
                form();
            }else{
                echo '<h1>Compte :' . $_POST['user'] . '</h1>';
            ?>
                <h1>page d'administration du site</h1>
            <?php
            $countFile = fopen('compteur.txt', 'r+');

            $openFile = fgets($countFile);
            $openFile += 1;
            fseek($countFile, 0);
            fputs($countFile, $openFile);

            fclose($countFile);
            echo '<h2>Le compte admin a été ouvert ' . $openFile . ' fois!';
            ?>

            <?php
            }
        ?>
    </body>
</html>
