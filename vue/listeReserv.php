<h2 class="text-center">Liste des Réservations</h2>

<?php if (isset($_GET['message'])): ?>
    <div class="alert alert-success" role="alert">
        <?= htmlspecialchars($_GET['message']) ?>
    </div>
<?php endif; ?>

<?php if (!empty($reservations)): ?>
    <table class="table">
        <thead>
            <tr>
                <th>Numéro de Réservation</th> <!-- Nouvelle colonne pour le numéro de réservation -->
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date d'arrivée</th>
                <th>Date de départ</th>
                <th>Numéro de chambre</th>
                <th>Action</th> <!-- Nouvelle colonne pour la suppression -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= htmlspecialchars($reservation['numReservation']) ?></td> <!-- Affichage du numéro de réservation -->
                    <td><?= htmlspecialchars($reservation['nom']) ?></td>
                    <td><?= htmlspecialchars($reservation['prenom']) ?></td>
                    <td><?= htmlspecialchars($reservation['dateArrivee']) ?></td>
                    <td><?= htmlspecialchars($reservation['dateDepart']) ?></td>
                    <td><?= htmlspecialchars($reservation['numChambre']) ?></td>
                    <td>
                        <!-- Formulaire pour supprimer la réservation -->
                        <form method="post" action="reservation.php?action=supprimer&id=<?= htmlspecialchars($reservation['numReservation']) ?>" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune réservation trouvée.</p>
<?php endif; ?>
