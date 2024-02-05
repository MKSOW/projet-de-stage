<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJOUT D'UNE ENTREPRISE A LA BASE DES DONNEES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                
                <h1>VOTRE ENTREPRISE</h1>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Liste des projets </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$PetiteEntreprise->id}}</td>
                            <td>{{$PetiteEntreprise->nom}}</td>
                            <td>{{$PetiteEntreprise->description}}</td>
                            <td>{{$PetiteEntreprise->listeProjets}}</td>
                        </tr>
                    </tbody>
                </table> <hr>
                <a href="{{route('PetiteEntreprise.index')}}" class="btn btn-primary">Retour vers le menu</a> 
            </div>
        </div>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>