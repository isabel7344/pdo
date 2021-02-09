<?php
require "Controllers/indexController.php"; // PARTIE 1 EXO 2:
// Afficher tous les types de spectacles possibles.
$showTypes = new ShowTypes();
$resultShowTypes = $showTypes->getAllShowTypes();
foreach ($resultShowTypes as $key => $value) {

?>
    <p><?= $value['type'] ?></p>
<?php
}

// PARTIE 1 EXO 3:
// Afficher les 20 premiers clients.
$Clients = new Clients();
$resultFirstClients = ($Clients->FirstClients());
// POUR L'AFFICHAGE EN INDEX AVEC UN FOREACH
// <p></br>Ci-dessous, le nom et prénom des 20 premiers clients de la Base De Données "Colyseum" :
foreach ($resultFirstClients as $key => $value) {
?>
    <p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
<?php
}


// PARTIE 1 EXO 4: -->
// N'afficher que les clients possédant une carte de fidélité.
$Clients = new Clients();
$resultCardClients = ($Clients->CardClients());
foreach ($resultCardClients as $key => $value) {
?>
    <p><?= $value["lastName"] . " " . $value["cardNumber"] ?></p>
<?php
}

// / PARTIE 1 EXO 5: -->
// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
// Les afficher comme ceci :
// Nom : Nom du client
// Prénom : Prénom du client
// Trier les noms par ordre alphabétique.
$Clients = new Clients();
$resultOrderClients = ($Clients->OrderClients('M'));
foreach ($resultOrderClients as $key => $value) {
?>
    <p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
<?php
}

// Exercice 6
// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. 
// Trier les titres par ordre alphabétique. 
// Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.
$Shows = new Shows();
$resultGetAllShows = ($Shows->GetAllShows());
foreach ($resultGetAllShows as $key => $value) {
?>
    <p><?= 'Spectacle ' . "" . $value["title"] . "" . ' par l\'artiste ' . "" . $value["performer"] . "" . ' en date du ' . "" . $value["date"] . "" . ' à ' . "" . $value["startTime"] . "" . ' heures' ?></p>
    <?php
}
//     Exercice 7
// Afficher tous les clients comme ceci :
// Nom : Nom de famille du client
// Prénom : Prénom du client
// Date de naissance : Date de naissance du client
// Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
// Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.
$Clients = new Clients();
$resultgetClients = ($Clients->getClients());
foreach ($resultgetClients as $key => $value) {
    if ($value["card"] == 1) {
    ?>
        <p><?= ' Nom: '  . $value["lastName"] . " " . ' Prénom: ' . $value["firstName"] . " " . ' Date de naisssance: ' . $value["birthDate"] . " " . ' Carte de Fidélité: ' . "oui" . " " . ' Numéro de Carte: ' . $value["cardNumber"] ?></p>
    <?php
    } else {
    ?>
        <p><?= ' Nom: '  . $value["lastName"] . " " . ' Prénom: ' . $value["firstName"] . " " . ' Date de naisssance: ' . $value["birthDate"] . " " . ' Carte de Fidélité: non '  ?></p>
<?php
    }
}
