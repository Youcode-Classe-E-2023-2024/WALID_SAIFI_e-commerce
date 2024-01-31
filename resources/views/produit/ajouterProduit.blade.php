<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Inclure Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Ajouter Annonce</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Ajouter Produit</h2>
                </div>
                <div class="card-body">
                    <form class="form" method="post" action="">
                        <div class="form-group">
                            <label for="titre">Titre de l'Annonce</label>
                            <input type="text" class="form-control" id="titre" name="titre" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description du produit :</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>

                        <div class="form-group">
                            <label for="prix">Prix :</label>
                            <input type="text" class="form-control" id="prix" name="prix" required>
                        </div>

                        <div class="form-group">
                            <label for="telephone">Téléphone :</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter Annonce</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inclure Bootstrap JS et jQuery (si nécessaire) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
