<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Préinscription ISI</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    body {
      background: url('{{ asset('images/img_isi.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden; /* Empêche le scroll */
    }

    .form-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 1rem; /* Réduction du padding */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .form-group {
      margin-bottom: 0.75rem; /* Réduit l'espace entre les champs */
      display: flex;
      justify-content: center;
    }

    .form-control, .form-select {
      border-radius: 8px;
      border: 1px solid #ced4da;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
      height: 40px; /* Réduit la hauteur des champs */
      width: 100%;
    }

    .btn-register {
      background-color: #0033A0;
      color: white;
      border-radius: 8px;
      border: none;
      width: 100%;
      padding: 12px;
    }

    .btn-register:hover {
      background-color: #002a80;
    }

    .form-header {
      margin-bottom: 1rem;
      text-align: center;
    }

    .form-control::placeholder {
      color: #6c757d;
    }

    .text-center a {
      color: #0033A0;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <div class="form-header">
      <h4>Formulaire de Préinscription</h4>
    </div>
    <form method="POST" action="{{ route('preinscription.submit') }}">
      @csrf
      <div class="form-group">
        <input type="text" class="form-control" name="nom" placeholder="Nom" required>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
      </div>

      <div class="form-group">
        <select class="form-select" name="genre" required>
          <option value="" disabled selected>Genre</option>
          <option value="M">Masculin</option>
          <option value="F">Féminin</option>
        </select>
      </div>

      <div class="form-group">
        <input type="date" class="form-control" name="date_naiss" placeholder="date de Naiss" required>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="adresse" placeholder="Adresse" required>
      </div>

      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <input type="tel" class="form-control" name="telephone" placeholder="Téléphone" required>
      </div>

      <div class="form-group">
        <select class="form-select" name="niveau_etude" required>
          <option value="" disabled selected>Niveau d'Étude</option>
          <option value="BFEM">BFEM</option>
          <option value="BAC">BAC</option>
          <option value="LICENCE1">LICENCE 1</option>
          <option value="LICENCE2">LICENCE 2</option>
          <option value="LICENCE3">LICENCE 3</option>
          <option value="MASTER1">MASTER 1</option>
          <option value="MASTER2">MASTER 2</option>
        </select>
      </div>

      {{-- <div class="form-group">
        <select class="form-select" name="serie" required>
          <option value="" disabled selected>Série</option>
          <option value="S">S</option>
          <option value="L">L</option>
          <option value="G">G</option>
          <option value="T">T</option>
        </select>
      </div> --}}

      <div class="form-group">
        <select class="form-select" name="pays_id" required>
          <option value="" disabled selected>Pays d'origine</option>
          @foreach ( $pays as $pay)
          <option value="{{$pay->id}}">{{$pay->nom}}</option>

          @endforeach

        </select>
      </div>
      <div class="form-group">
        <select class="form-select" name="programme_id" required>
          <option value="" disabled selected>Programme</option>
          @foreach ( $programmes as $programme)
          <option value="{{$programme->id}}">{{$programme->intitule_programme}}</option>

          @endforeach

        </select>
      </div>

      {{-- <div class="form-group">
        <select class="form-select" name="niveau_integrer" required>
          <option value="" disabled selected>Niveau à intégrer</option>
          <option value="LICENCE1">LICENCE 1</option>
          <option value="LICENCE2">LICENCE 2</option>
          <option value="LICENCE3">LICENCE 3</option>
          <option value="MASTER1">MASTER 1</option>
          <option value="MASTER2">MASTER 2</option>
          <option value="DT">DT</option>
          <option value="DOCTORAT">DOCTORAT</option>
        </select>
      </div> --}}

      <div class="text-center">
        <button type="submit" class="btn btn-register btn-lg">REGISTER NOW</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>
