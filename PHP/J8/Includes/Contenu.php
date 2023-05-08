    <div class="tableau text-center">
        <?php
            echo '<table class="table bg-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Adresse1</th>
                            <th scope="col">Adresse2</th>
                            <th scope="col">Code Postal</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach($resultats1 as $adresse){
                            echo '<tr>
                                <th scope="row">'.$adresse['id_adresse'].'</th>
                                <td>'.$adresse['aadresse1'].'</td>
                                <td>'.$adresse['aadresse2'].'</td>
                                <td>'.$adresse['acode_postal'].'</td>
                                <td>'.$adresse['aville'].'</td>
                                <td>
                                    <a class="btn btn-warning" href="Modify.php?id='.$adresse["id_adresse"].'&type=adresse">Modifier</a>
                                    <a class="btn btn-danger" href="Script/Delete.php?id='.$adresse["id_adresse"].'&type=adresse">Supprimer</a>
                                </td>
                            </tr>';
                        }
                
        ?>          </tbody>     
                </table>
            </tbody>
        </table>
    </div>
    <div class="formulaire w-50 mx-auto d-flex mb-5 p-5 rounded bg-light">
        <form action="Script/validate1.php" method="post" enctype="multipart/form-data">
            <fieldset class="my-5">
                <legend>Rajouter Adresse:</legend>
                <ul class="row list-unstyled p-3">
                    <li class="p-3">
                        <label for="aadresse1">Nom</label>
                        <input type="text" name="aadresse1" id="aadresse1" placeholder="Veuillez taper votre adresse" required>
                    </li>
                    <li class="p-3">
                        <label for="aadresse2">Description</label>
                        <input type="text" name="aadresse2" id="aadresse2" placeholder="Veuillez taper votre adresse" required>
                    </li>
                    <li class="p-3">
                        <label for="acode_postal">Code postal</label>
                        <input type="text" name="acode_postal" id="acode_postal" placeholder="Veuillez taper votre code postal" required>
                    </li>
                    <li class="p-3">
                        <label for="aville">Ville</label>
                        <input type="text" name="aville" id="aville" placeholder="Veuillez taper votre ville" required>
                    </li> 
                </ul>
                <input type="submit" value="valider">
            </fieldset>
        </form>
    </div>

    <div class="tableau text-center">
        <?php
            echo '<table class="table bg-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Delai</th>
                            <th scope="col">Pays</th>
                            <th scope="col">zone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach($resultats2 as $transporteur){
                            echo '<tr>
                                <th scope="row">'.$transporteur['id_transporteur'].'</th>
                                <td>'.$transporteur['tnom'].'</td>
                                <td>'.$transporteur['tdelai'].'</td>
                                <td>'.$transporteur['tpays'].'</td>
                                <td>'.$transporteur['tzone'].'</td>
                                <td>
                                    <a class="btn btn-warning" href="Modify.php?id='.$transporteur["id_transporteur"].'&type=transporteur">Modifier</a>
                                    <a class="btn btn-danger" href="Script/Delete.php?id='.$transporteur["id_transporteur"].'&type=transporteur">Supprimer</a>
                                </td>
                            </tr>';
                        }
                
        ?>          </tbody>     
                </table>
            </tbody>
        </table>
    </div>
    <div class="formulaire w-50 mx-auto d-flex mb-5 p-5 rounded bg-light">
        <form action="Script/validate2.php" method="post" enctype="multipart/form-data">
            <fieldset class="my-5">
                <legend>Rajouter Transporteur:</legend>
                <ul class="row list-unstyled p-3">
                    <li class="p-3">
                        <label for="tnom">Nom</label>
                        <input type="text" name="tnom" id="tnom" placeholder="Veuillez taper votre nom" required>
                    </li>
                    <li class="p-3">
                        <label for="tdelai">Delai</label>
                        <input type="text" name="tdelai" id="tdelai" placeholder="Veuillez taper votre delai" required>
                    </li>
                    <li class="p-3">
                        <label for="tpays">Pays</label>
                        <input type="text" name="tpays" id="tpays" placeholder="Veuillez taper votre pays" required>
                    </li>
                    <li class="p-3">
                        <label for="tzone">Zone</label>
                        <input type="text" name="tzone" id="tzone" placeholder="Veuillez taper votre zone" required>
                    </li>
                </ul>
                <input type="submit" value="valider">
            </fieldset>
        </form>
    </div>

    <div class="tableau text-center">
        <?php
            echo '<table class="table bg-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prix</th>
                            <th scope="col">TVA</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach($resultats3 as $produit){
                            echo '<tr>
                                <th scope="row">'.$produit['id_produit'].'</th>
                                <td>'.$produit['pnom'].'</td>
                                <td>'.$produit['pdescription'].'</td>
                                <td>'.$produit['pprix'].'</td>
                                <td>'.$produit['ptva'].'</td>
                                <td>
                                    <a class="btn btn-warning" href="Modify.php?id='.$produit["id_produit"].'&type=produit">Modifier</a>
                                    <a class="btn btn-danger" href="Script/Delete.php?id='.$produit["id_produit"].'&type=produit">Supprimer</a>
                                </td>
                            </tr>';
                        }
                
        ?>          </tbody>     
                </table>
            </tbody>
        </table>
    </div>
    <div class="formulaire w-50 mx-auto d-flex mb-5 p-5 rounded bg-light">
        <form action="Script/validate3.php" method="post" enctype="multipart/form-data">
            <fieldset class="my-5">
                <legend>Rajouter Produit:</legend>
                <ul class="row list-unstyled p-3">
                    <li class="p-3">
                        <label for="pnom">Nom</label>
                        <input type="text" name="pnom" id="pnom" placeholder="Veuillez taper votre nom" required>
                    </li>
                    <li class="p-3">
                        <label for="pdescription">Description</label>
                        <input type="text" name="pdescription" id="pdescription" placeholder="Veuillez taper votre description" required>
                    </li>
                    <li class="p-3">
                        <label for="pprix">Prix</label>
                        <input type="text" name="pprix" id="pprix" placeholder="Veuillez taper votre prix" required>
                    </li>
                    <li class="p-3">
                        <label for="ptva">TVA</label>
                        <input type="text" name="ptva" id="ptva" placeholder="Veuillez taper votre TVA" required>
                    </li>    
                </ul>
                <input type="submit" value="valider">
            </fieldset>
        </form>
    </div>