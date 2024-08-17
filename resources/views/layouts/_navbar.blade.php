<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestion Préinscription</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    .navbar {
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1030; /* Assure que la navbar est au-dessus du contenu */
      background-color: #0033A0; /* Couleur de fond de la navbar */
      display: flex;
      justify-content: center; /* Centre le contenu horizontalement */
    }
    .navbar-brand {
      display: block;
      text-align: center;
    }
    .content {
      margin-top: 56px; /* Pour compenser la hauteur de la navbar fixe */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logoisi.jpeg') }}" alt="ISI Logo" style="height: 40px;">
      </a>
    </div>
  </nav>

  <div class="content">
    <!-- Votre contenu principal ici -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
