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
                
                {{-- cas de succes  --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
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
                            <th colspan="2">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                        <tr>
                            <td scope="row">{{$client->id}}</td>
                            <td>{{$client->nom}}</td>
                            <td>{{$client->prenom}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->adresse}}</td>
                            <td>{{$client->ville}}</td>
                            <td>{{$client->numero_tel}}</td>
                            <td>
                                <form action="{{ route('clients.destroy', $client->id)}}" method="POST" title="cliquez pour supprimer le client"
                                    onsubmit="return confirm('étes vous sur de vouloir vraiment supprimer cet client')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" >Supprimer</button>

                                </form></td>
                                <td>
                                
                                <a href="{{route('clients.edit',$client->id)}}" class="btn btn-danger"
                                    title="appuyez sur ce boutton pour modifier les informations du nouveau client ">Modifier</a>
                                <a href="{{ route('clients.show', $client->id)}}" class="btn btn-info"
                                title="appuyez sur ce boutton pour afficher la liste des clients">Afficher</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <a href="{{route('clients.create')}}" class="btn btn-primary" 
                title="appuyez sur ce boutton pour ajouter une un nouveau client">Ajouter un nouveau cleint</a>
               
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>