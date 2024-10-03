<h2 class="text-center mb-4 text-brown">Ajouter Chambres</h2>

<div class="container">
    <form method="post" action="" enctype="multipart/form-data" name="addChambreForm" id="addChambreForm" onsubmit="return validateForm();">
        <div class="card shadow-sm card-custom mb-4" style="border-radius: 10px;">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="">Prix</label>
                    <input type="text" class="form-control" name="prix" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Nombre de lits</label>
                    <input type="text" class="form-control" name="nbLits" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Capacité</label>
                    <input type="text" class="form-control" name="nbPers" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Photo</label>
                    <input type="file" accept="image/*" class="form-control" name="image" required>
                </div>

                <div class="form-group mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" class="form-control" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-brown mt-3">Ajouter</button>
            </div>
        </div>
    </form>
</div>

<script src="utils/js/addChbre.js"></script>
