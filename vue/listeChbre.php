<h2 class="text-center my-4 text-brown">Liste des Chambres</h2>

<?php if (isset($_GET['message'])): ?>
    <div class="alert alert-success" role="alert">
        <?= htmlspecialchars($_GET['message']) ?>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <?php foreach ($chambres as $chambre): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm card-custom" style="border-radius: 10px;">
                    <img class="card-img-top" src="utils/img/<?= htmlspecialchars($chambre['image']) ?>" alt="Image de la chambre" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <div class="card-body text-center"> 
                        <h5 class="card-title text-brown"><?= htmlspecialchars($chambre['prix']) ?>€</h5>
                        <p class="card-text mb-1"><strong>Nombre de lits :</strong> <?= htmlspecialchars($chambre['nbLits']) ?></p>
                        <p class="card-text mb-1"><strong>Capacité :</strong> <?= htmlspecialchars($chambre['nbPers']) ?> personne(s)</p>
                        <div class="d-flex justify-content-center">
                            <a href="chambre.php?action=detail&id=<?= htmlspecialchars($chambre['numChambre']) ?>" class="btn btn-custom me-2">Détails</a> 
                            
                            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == "administrateur"): ?>
                                <form method="post" action="chambre.php?action=supprimer&id=<?= htmlspecialchars($chambre['numChambre']) ?>" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette chambre ?');" class="ms-2">
                                    <button type="submit" class="btn btn-warning">Supprimer</button> 
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
