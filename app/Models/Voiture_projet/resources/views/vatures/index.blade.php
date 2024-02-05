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
                
                
                <h1>VOTRE PANIER DE VOITUTRE DE VOITURE</h1>
                
                {{-- cas de succes  --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <hr>
                <a href="{{route('voitures.create')}}" class="btn btn-primary" 
                title="appuyez sur ce boutton pour ajouter une une nouvelle voiture">Ajouter une nouvelle voiture</a>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>matricule</th>
                            <th>Marque</th>
                            <th>couleur</th>
                            <th>dateMiseEnCirculation</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vatures as $vature)
                        <tr>
                            <td scope="row">{{$vature->id}}</td>
                            <td>{{$vature->matricule}}</td>
                            <td>{{$vature->marque}}</td>
                            <td>{{$vature->dateMiseEnCirculation}}</td>
                            <td>
                                <form action="{{ route('vatures.destroy', $vature->id)}}" method="POST" title="cliquez pour supprimer la vature"
                                    onsubmit="return confirm('étes vous sur de voular vraiment supprimer cette vature')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" >Supprimer</button>

                                </form></td>
                                <td>
                                
                                <a href="{{route('vatures.edit',$vature->id)}}" class="btn btn-danger"
                                    title="appuyez sur ce boutton pour modifier les informations de la vature nouvelle vature">Modifier</a>
                                <a href="{{ route('vatures.show', $vature->id)}}" class="btn btn-info"
                                title="appuyez sur ce boutton pour afficher la liste des vatures">Afficher</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>