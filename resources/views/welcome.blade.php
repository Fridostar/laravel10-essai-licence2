<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Bijouterie</title>
</head>

<body>
  <div class="container col-6 py-5">
    <div class="card">
      <div class="card-header"><h1 class="text-center">PAGE DE CONNEXION</h1></div>
      <div class="card-body">
        <form method="POST" action="/">
          @csrf
          <!-- save first name field -->
          <div class="form-group mb-3">
            <label for="firstName">Prénom :</label>
            <input type="text" name="firstName" class="form-control" id="firstName" aria-describedby="firstName" placeholder="Veuillez entrer votre prénom">
          </div>

          <!-- save last name field -->
          <div class="form-group mb-3">
            <label for="lastName">Nom :</label>
            <input type="text" name="lastName" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Veuillez entrer votre nom">
          </div>

          <!-- save phone nomber field -->
          <div class="form-group mb-3">
            <label for="phoneNumber">Numéro de téléphone :</label>
            <input type="text" name="phoneNumber" required class="form-control" id="phoneNumber" aria-describedby="phoneNumber" placeholder="Entrer votre adresse mail">
          </div>

          <!-- save email field -->
          <div class="form-group mb-3">
            <label for="email">Email address :</label>
            <input type="email" name="email" required class="form-control" id="email" aria-describedby="email" placeholder="Entrer votre adresse mail">
          </div>
          <!-- save password field -->
          <div class="form-group mb-3">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required class="form-control" id="password" placeholder="Votre mot de passe">
          </div>
          <hr>
          <button type="submit" class="btn btn-primary">Me connecter</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>