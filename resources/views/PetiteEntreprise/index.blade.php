<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJOUT D'UNE NOUVELLE PETITE ENTREPRISE A LA BASE DES DONNEES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <div class="row">
            <div class="col">
                 {{-- cas de succes  --}}
                 @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
             @endif
             <hr>
             <h1>liste des entreprise</h1>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>DESCRIPTION</th>
                            <th> <select name="listeProjets">
                                <option value="">Filtre par projet : </option>
                                <option value="projet1">marketing</option>
                                <option value="projet1">economie</option>
                                <option value="projet1">publicité</option>
                                <option value="projet1">autres</option>
                                
                                </select> </th>
                            <th colspan="2">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PetiteEntreprises as $PetieEntreprise)
                        <tr>
                            <td scope='row'>{{$PetieEntreprise->id}}</td>
                            <td>{{$PetieEntreprise->nom}}</td>
                            <td>{{$PetieEntreprise->description}}</td>
                            <td>{{$PetieEntreprise->listeProjets}}</td>
                            <td>
                                <form action="{{ route('PetiteEntreprise.destroy', $PetieEntreprise->id)}}" method="POST" >
                                    
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" >Supprimer</button>
                                    @csrf
                                </form>
                            </td>
                            <td>
                                
                                <a href="{{route('PetiteEntreprise.edit',$PetieEntreprise->id)}}" class="btn btn-danger"
                                    title="appuyez sur ce boutton pour modifier les informations ">Modifier</a>
                                <a href="{{ route('PetiteEntreprise.show', $PetieEntreprise->id)}}" class="btn btn-info"
                                title="appuyez sur ce boutton pour afficher la liste des PetiteEntreprise">Afficher</a>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <hr>
                <a href="{{ route('PetiteEntreprise.create') }}" class="btn btn-primary" 
                title="appuyez sur ce boutton pour ajouter une un nouveau client">Ajouter une nouvelle Petite Entreprise</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>