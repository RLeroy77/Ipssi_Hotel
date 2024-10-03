<h2 class="text-center mb-4 text-brown">Liste des Réservations</h2>

<?php if (isset($_GET['message'])): ?>
    <div class="alert alert-success" role="alert">
        <?= htmlspecialchars($_GET['message']) ?>
    </div>
<?php endif; ?>

<?php if (!empty($reservations)): ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark text-light">
                <tr>
                    <th>Numéro de Réservation</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date d'arrivée</th>
                    <th>Date de départ</th>
                    <th>Numéro de chambre</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                    <tr>
                        <td><?= htmlspecialchars($reservation['numReservation']) ?></td>
                        <td><?= htmlspecialchars($reservation['nom']) ?></td>
                        <td><?= htmlspecialchars($reservation['prenom']) ?></td>
                        <td><?= htmlspecialchars($reservation['dateArrivee']) ?></td>
                        <td><?= htmlspecialchars($reservation['dateDepart']) ?></td>
                        <td><?= htmlspecialchars($reservation['numChambre']) ?></td>
                        <td>
                            <form method="post" action="reservation.php?action=supprimer&id=<?= htmlspecialchars($reservation['numReservation']) ?>" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');">
                                <button type="submit" class="btn btn-warning">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="text-center">Aucune réservation trouvée.</p>
<?php endif; ?>
