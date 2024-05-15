<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>modifier personnel</title>
</head>
<body class="d-flex flex-column h-100">
<div class="flex-shrink-0">
<div class="container">
<h1 class="mt-5">Modifier un personel </h1>
<form method="POST" class="row g-3" action="{{ route('modifiPersonnel') }}" enctype="multipart/form-data" novalidate>
  
  @csrf
<div class="mb-3">
    <label for="inputNom" class="form-label">Nom</label>
    <input id="inputNom" type="text" placeholder="Title" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom', 'ouedraogo') }}" autocomplete="nom" autofocus>
    @error("nom")
      {{ $message }}
     @enderror
  </div>
  <div class="mb-3">
    <label for="inputPrenom" class="form-label">Prenom</label>
    <input id="inputPrenom" type="text" placeholder="Prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom', 'bona') }}" autocomplete="prenom" autofocus>
    @error("prenom")
    {{ $message }}
  @enderror
  </div>
  <div class="mb-3">
    <label for="telephone" class="form-label">Telephone</label>
    <input id="inputTelephone" type="text" placeholder="telephone" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone', '61125888') }}" autocomplete="telephone" autofocus>
    @error("telephone")
    {{ $message }}
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>  
</div> 
</div>                                                                 
</body>
</html>