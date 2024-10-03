<h2 class="text-center mb-4 text-brown">Détail de la Chambre</h2>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm card-custom mb-4" style="border-radius: 10px;">
                <img class="card-img-top" src="utils/img/<?= htmlspecialchars($chambre['image']) ?>" alt="Image de la chambre" style="max-width: 100%; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">Prix : <?= htmlspecialchars($chambre['prix']) ?>€ par nuit</h5>
                    <div class="mb-2">
                        <strong>Nombres de lit : </strong><?= htmlspecialchars($chambre['nbLits']) ?> Lit(s)
                    </div>
                    <div>
                        <strong>Description : </strong><?= htmlspecialchars($chambre['description']) ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h2 class="text-center mb-4 text-brown">Créer une Réservation</h2>
            <div class="card shadow-sm card-custom" style="border-radius: 10px;">
                <div class="card-body">
                    <form action="reservation.php?action=ajouter" method="post">
                        <div class="form-group mb-3">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" name="prenom" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tel">Téléphone</label>
                            <input type="text" class="form-control" name="tel" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="dateArrivee">Date d'Arrivée</label>
                            <input type="date" class="form-control" name="dateArrivee" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="dateDepart">Date de Départ</label>
                            <input type="date" class="form-control" name="dateDepart" required>
                        </div>

                        <input type="hidden" name="numChambre" value="<?= htmlspecialchars($_GET['id']) ?>">

                        <button type="submit" class="btn btn-brown mt-2">Réserver</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
