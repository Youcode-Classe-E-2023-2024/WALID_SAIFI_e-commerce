<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Inclure Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Registre</h2>
                </div>
                <div class="card-body">
                    <form class="form" method="post" action="">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="username" class="form-control" id="email" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">mot de passe :</label>
                            <input type="password" class="form-control"  name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">registre</button>
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
