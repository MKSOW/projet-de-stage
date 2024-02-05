<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJOUT D'UN CLIENT A LA BASE DES DONNEES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                
                <h1>VOTRE LISTE DE CLIENTS</h1>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>Numero de telephone</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->nom}}</td>
                            <td>{{$client->prenom}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->adresse}}</td>
                            <td>{{$client->ville}}</td>
                            <td>{{$client->numero_tel}}</td>
                        </tr>
                    </tbody>
                </table> <hr>
                <a href="{{route('clients.index')}}" class="btn btn-primary">Retour vers le menu</a> 
            </div>
        </div>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>