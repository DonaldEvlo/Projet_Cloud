<?php
    include('Connexion.php');
    $sqlQuery= 'SELECT * FROM etudiant';
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
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <nav class="navbar"> <form action="Script.php" method="post">
        <header><button type="submit" name="Acceuil">Acceuil</button>
        <button  type="submit" name="Professeur">Professeur </button>
        <button  type="submit" name="Fileres">Filères</button>
        <button  type="submit" name="Etudiants">Etudiants</button></header>
    </form ></nav>
    <h1>Bienvenue !!!</h1>
    <h2>Ceci est la page des étudiants inscrits</h2>
   <form action="">
        <Table>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Filère</td>
                 <td>Classe</td>
            </tr>
                <?php
                    foreach($tabAss as $adhe){
                        echo "<tr>";
                            echo"<td><input size='20' readonly value='".$adhe['Nom']."' name='nom'></td>";
                            echo"<td><input size='20' readonly value='".$adhe['Prenom']."' name='specialte'>";
                            echo"<td><input size='20' readonly value='".$adhe['Filiere']."' name='description'>";
                            echo"<td><input size='20' readonly value='".$adhe['Classe']."' name='filière'>";
                            echo "</tr>";
                        }
                        
                ?>
        </Table>

   </form>
</body>
</html>