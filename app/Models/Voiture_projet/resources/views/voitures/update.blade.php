<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('voiture.update', $voiture->id)}}" method="post"> 
                    @method('put')
                      <div class="mb-3">
                        <label for="marque" class="form-label">Marque</label>
                        <input type="text" id="marque" class="form-control" placeholder="marque" name="marque" value="{{$voiture->marque}}">
                      </div>
                      <div class="mb-3">
                        <label for="modele" class="form-label">Modele</label>
                        <input type="text" id="modele" class="form-control" placeholder="modele" name="modele" value="{{$voiture->modele}}">
                      </div><div class="mb-3">
                        <label for="annee" class="form-label">Annee</label>
                        <input type="text" id="annee" class="form-control" placeholder="annee" name="annee" value="{{$voiture->annee}}">
                      </div><div class="mb-3">
                        <label for="kilometrage" class="form-label">Kilometrage</label>
                        <input type="text" id="kilometrage" class="form-control" placeholder="kilometrage" name="kilometrage" value="{{$voiture->kilometrage}}">
                      </div><div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="text" id="prix" class="form-control" placeholder="prix" name="prix" value="{{$voiture->prix}}">
                        <br>
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