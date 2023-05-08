<?php
require "includes/Header.php";
require_once(__DIR__."/Script/pdo.php");

$requete = $pdo->query("SELECT * FROM news");
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <div class="tableau">
        <?php
            if(empty($resultats)){
                echo "Il n'y a pas de news pour l'instant";
            }
            else{
                echo '<table class="table news bg-light">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">News</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                    <tbody>';
                foreach($resultats as $news){
                    echo '<tr>
                        <th scope="row">'.$news['news_sujet'].'</th>
                        <td><p>'.$news['news_text'].'</p></td>
                        <td>
                            <a class="btn btn-warning acnews" href="NewsModify.php?id_news='.$news["id_news"].'">Modifier</a>
                            <a class="btn btn-danger acnews" href="Script/Delete.php?id_news='.$news["id_news"].'">Supprimer</a>
                        </td>
                    </tr>';
                }
            }?>
                    </tbody>
                </table>
            </tbody>
        </table>
    </div>
</div>
<?php require "includes/Footer.php"; ?>
