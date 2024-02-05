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
                <form action="{{route('PetiteEntreprise.update', $client->id)}}" method="post"> 
                   @method('put')
                      <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{$PetiteEntreprise->nom}}">
                      </div>
                      <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="description" name="description" value="{{$PetiteEntreprise->description}}">
                      </div>
                      <label for="listeProjets" class="form-label"><strong>liste Des Projets</strong></label>
                      <br>
                        <input type="text" id="listeProjets" class="form-control" placeholder="listeProjets" name="listeProjets" value="{{$PetiteEntreprise->listeProjets}}">
                      </div>
                      
                                       <br> <br>
                        @csrf
                    <input type="submit" class="btn btn-primary" value="Modifier">
                  </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>