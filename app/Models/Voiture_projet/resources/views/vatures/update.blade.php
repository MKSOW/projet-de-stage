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
                <form action="{{route('vatures.update', $vature->id)}}" method="post"> 
                   @method('put')
                   <div class="mb-3">
                    <label for="matricule" class="form-label"><strong>matricule</strong></label>
                    <input type="text" id="matricule" class="form-control" placeholder="matricule" name="matricule" value="{{$vature->matricule}}">
                  </div><div class="mb-3">
                    <div class="mb-3">
                      <label for="marque" class="form-label"><strong>Marque</strong></label>
                      <input type="text" id="marque" class="form-control" placeholder="marque" name="marque" value="{{$vature->marque}}">
                    </div>
                    <label for="couleur" class="form-label"><strong>couleur</strong></label>
                    <input type="text" id="couleur" class="form-control" placeholder="couleur" name="couleur" value="{{$vature->couleur}}">
                  </div><div class="mb-3">
                    <label for="dateMiseEnCirculation" class="form-label"><strong>dateMiseEnCirculation</strong></label>
                    <input type="text" id="dateMiseEnCirculation" class="form-control" placeholder="dateMiseEnCirculation" name="dateMiseEnCirculation" value="{{$vature->dateMiseEnCirculation}}">
                  </div><div class="mb-3">
                      
                        @csrf
                    <input type="submit" class="btn btn-primary" value="Modifier">
                  </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>