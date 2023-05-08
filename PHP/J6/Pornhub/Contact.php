<?php
require "includes/Header.php";
require_once(__DIR__."/Script/pdo.php");
$requete = $pdo->query("SELECT * FROM Contact");
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="contenu py-3 mx-auto">
    <div class="formulaire w-50 mx-auto d-flex p-5 rounded">
        <form action="Script/validateUpload.php" method="post" enctype="multipart/form-data">
            <fieldset class="my-5">
                <ul class="col list-unstyled p-3 w-25">
                    <li class="p-3"><legend>Rajouter Contact:</legend></li>
                    <li class="p-3">
                        <label for="sujet">Sujet</label>
                        <input type="text" name="sujet" id="sujet" placeholder="Veuillez taper votre sujet" required>
                    </li>
                    <li class="p-3">
                        <label for="piece_jointe">Piece jointe</label>
                        <input type="file" name="piece_jointe" required>
                    </li>
                    <li class="p-3">
                        <label for="message">Message</label>
                        <input type="text" name="message" id="message" placeholder="Veuillez taper votre message" required>
                    </li>
                    <li class="BT-submit p-3">
                        <input type="submit" value="valider">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>


    <div class="tableau text-center">
        <?php
            if(empty($resultats)){
                echo "Il n'y a pas de contact pour l'instant";
            }
            else{
                echo '<table class="table bg-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sujet</th>
                            <th scope="col">Nom du fichier</th>
                            <th scope="col">message</th>
                        </tr>
                    </thead>
                <tbody>';
                foreach($resultats as $contact){
                    echo '<tr>
                        <th scope="row">'.$contact['id_contact'].'</th>
                        <td>'.$contact['sujet'].'</td>
                        <td>'.$contact['nom_fichier'].'</td>
                        <td>'.$contact['message'].'</td>
                    </tr>';}
                }?>
                    </tbody>
                </table>
            </tbody>
        </table>
    </div>
</div>
<?php require "includes/Footer.php"; ?>
