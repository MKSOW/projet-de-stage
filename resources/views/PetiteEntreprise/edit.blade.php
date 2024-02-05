<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'une Petite Entreprise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                
                <h1>MODIFIER LES INFORMATIONS D'UNE PETITE ENTREPRISE</h1>
                <hr>
                <form action="{{ route('PetiteEntreprise.update', $PetiteEntreprise->id) }}" method="post"> 
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ $PetiteEntreprise->nom }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="{{ $PetiteEntreprise->description }}">
                    </div>
                    <div class="mb-3">
                        <label for="listeProjets" class="form-label"><strong>Liste Projets</strong></label>
                        <input type="text" id="listeProjets" class="form-control" placeholder="Liste Projets" name="listeProjets" value="{{ $PetiteEntreprise->listeProjets }}">
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
