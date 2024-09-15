<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Plateforme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">LPTF</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://laplateforme.io">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Units</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Skills</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron">
    <h1 class="display-4">Bonjour, monde!</h1>
    <p class="lead">Il existe plusieurs visions du terme...</p>
    <hr class="my-4">
    <p id="jumbotron-content">Le sens étendu désigne l'univers dans son ensemble.</p>
    <button id="reboot-world" class="btn btn-danger">Rebooter le Monde</button>
</div>

<!-- Card -->
<div class="card" style="width: 18rem;">
    <img src="butterfly.jpg" class="card-img-top" alt="Papillon">
    <div class="card-body">
        <h5 class="card-title">Un Papillon</h5>
        <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes.</p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#buyModal">Commander votre propre papillon</button>
    </div>
</div>

<!-- List group -->
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">Luxure</a>
    <a href="#" class="list-group-item list-group-item-action">Gourmandise</a>
    <a href="#" class="list-group-item list-group-item-action">Avarice</a>
    <!-- Add more items as needed -->
</div>

<!-- Modal -->
<div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation d'Achat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vous avez commandé un papillon avec succès !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Form -->
<form class="mt-3">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- Progress bar -->
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
