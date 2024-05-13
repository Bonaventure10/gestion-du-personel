<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Ajouter personnel</title>
</head>
<body class="d-flex flex-column h-100">
<div class="flex-shrink-0">
<div class="container">
<h1 class="mt-5">Ajouter un personel </h1>
<form method="POST" class="row g-3" action="{{ route('inserePersonnel') }}" enctype="multipart/form-data" novalidate>
@csrf
<div class="mb-3">
    <label for="inputNom" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="inputNom" aria-describedby="inputNom">
    @error("nom")
      {{ $message }}
    @enderror
  </div>
  <div class="mb-3">
    <label for="inputPrenom" class="form-label">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="inputPrenom" aria-describedby="inputPrenom">
    @error("prenom")
    {{ $message }}
  @enderror
  </div>
  <div class="mb-3">
    <label for="telephone" class="form-label">Telephone</label>
    <input type="text" name="telephone" class="form-control" id="telephone" aria-describedby="telephone">
    @error("telephone")
    {{ $message }}
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>  
</div> 
</div>                                                                 
</body>
</html>