<?php
    include('Connexion.php');
    $sqlQuery= 'SELECT * FROM filères';
    $AdSte=$db -> prepare($sqlQuery);
    $AdSte->execute();
    $tabAss= $AdSte->fetchAll();

    $taille =count($tabAss);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>
<body> 
    <h1>Bienvenue !!!</h1>
    <h2>Ceci est la page d'acceuil</h2>
    <h2>Voici la liste des professeur et leur matiere</h2>
    <form action="Script.php" method="post">
        <header><button type="submit" name="Acceuil">Acceuil</button>
        <button  type="submit" name="Professeur">Professeur </button>
        <button  type="submit" name="Fileres">Filères</button>
        <button  type="submit" name="Etudiants">Etudiants</button></header>
    </form >
   <form action="">
        <Table>
            <tr>
                <td>Nom</td>
                <td>Specialite</td>
                <td>Description</td>
            </tr>
                <?php
                    foreach($tabAss as $adhe){
                        echo "<tr>";
                            echo"<td><input size='20' readonly value='".$adhe['Nom']."' name='nom'></td>";
                            echo"<td><input size='20' readonly value='".$adhe['Specialite']."' name='specialite'>";
                            echo"<td><input size='20' readonly value='".$adhe['Description']."' name='description'>";
                            echo "</tr>";
                        }
                        
                ?>
        </Table>

   </form>
</body>
</html>