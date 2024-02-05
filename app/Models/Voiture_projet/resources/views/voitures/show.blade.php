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
                
                <h1>CRUD LARAVEL 10</h1>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marque</th>
                            <th>Modele</th>
                            <th>Annee</th>
                            <th>Kilometrage</th>
                            <th>prix</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$voiture->id}}</td>
                            <td>{{$voiture->marque}}</td>
                            <td>{{$voiture->modele}}</td>
                            <td>{{$voiture->annee}}</td>
                            <td>{{$voiture->kilometrage}}</td>
                            <td>{{$voiture->prix}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{route('voitures.index')}}" class="btn btn-primary">Vers le menu</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>