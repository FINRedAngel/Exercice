<?php
require "includes/Header.php"; 
if(!isset($_SESSION["id_user"])){
    header("location: Accueil.php");
}

require_once(__DIR__."/Script/pdo.php");
$requete = $pdo->query("SELECT * FROM CV");
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="contenu mx-auto">
    <div class="formulaire w-50 mx-auto p-5">
        <form action="Script/validateUploadCV.php" method="post" enctype="multipart/form-data">
            <fieldset class="my-5">
                <ul class="col list-unstyled p-3 w-25">
                    <li class="p-3"><legend>Envoyez un CV:</legend></li>
                    <li class="p-3">
                        <label for="Nom">Sujet</label>
                        <input type="text" name="Nom" id="Nom" placeholder="Veuillez taper votre Nom" required>
                    </li>
                    <li class="p-3">
                        <label for="CV_joint">Piece jointe</label>
                        <input type="file" name="CV_joint" required>
                    </li>
                    <li class="BT-submit p-3">
                        <input type="submit" value="valider">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
    <div class="tableau text-center mt-5 p-5">
            <?php
            if(empty($resultats)){
                echo "Il n'y a pas de CV pour l'instant";
            }
            else{
                echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Lien</th>
                            </tr>
                        </thead>
                    <tbody>';

                    foreach($resultats as $CV){
                        echo '<tr>
                                <th scope="row">'.$CV['id_cv'].'</th>
                                <td>'.$CV['cv_nom'].'</td>
                                <td><a href='.$CV['cv_link'].'>Voir</a></td>
                            </tr>';}}
                        ?>
                    </tbody>
                </table>
            </tbody>
        </table>
    </div>
</div>
<?php require "includes/Footer.php"; ?>
