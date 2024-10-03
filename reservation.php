<?php

include "fonction.php";
include "vue/header.php";

// Vérifie si une action est définie dans l'URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {

        // Cas pour ajouter une réservation
        case "ajouter":
            if (isset($_POST['prenom'])) {
                extract($_POST);
                
                // Vérifier que la date de départ est postérieure à la date d'arrivée
                if (strtotime($dateDepart) <= strtotime($dateArrivee)) {
                    echo "La date de départ doit être postérieure à la date d'arrivée.";
                } else {
                    // Insertion du client dans la table 'client'
                    $query = "INSERT INTO client (nom, prenom, tel) VALUES (:nom, :prenom, :tel)";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute([
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'tel' => $tel
                    ]);
                    
                    // Récupérer l'ID du client inséré
                    $numClient = $pdo->lastInsertId();
                    
                    // Insertion de la réservation dans la table 'reservation'
                    $query = "INSERT INTO reservation (numClient, numChambre, dateArrivee, dateDepart) 
                              VALUES (:numClient, :numChambre, :dateArrivee, :dateDepart)";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute([
                        'numClient' => $numClient,
                        'numChambre' => $numChambre,
                        'dateArrivee' => $dateArrivee,
                        'dateDepart' => $dateDepart
                    ]);

                    // Redirection après ajout de la réservation avec message de confirmation
                    header("location: reservation.php?action=lister&message=Réservation ajoutée avec succès");
                    exit;
                }
            } else {
                // Inclusion du formulaire de réservation si aucune donnée n'a été soumise
                include "vue/formReserv.php"; // Assurez-vous que ce fichier existe
            }
            break;

        // Cas pour lister les réservations
        case "lister":
            $reservations = getAllReservations(); // Fonction qui récupère toutes les réservations
            include "vue/listeReserv.php"; 
            break;

        // Cas pour supprimer une réservation
        case "supprimer":
            if (isset($_GET['id'])) {
                $idReservation = $_GET['id'];

                // Supprimer la réservation de la base de données
                $query = "DELETE FROM reservation WHERE numReservation = :id";
                $stmt = $pdo->prepare($query);
                $stmt->execute(['id' => $idReservation]);

                // Redirection après suppression avec message de confirmation
                header("location: reservation.php?action=lister&message=Réservation supprimée avec succès");
                exit;
            }
            break;
    }
}

include "vue/footer.php";
