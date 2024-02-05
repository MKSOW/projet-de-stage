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
            <div class="col-9">
                
                <h1> REMPLISSEZ CE FORMULAIRE POUR ETRE ENREGISTRER DANS LA BASE DES DONNEES</h1>
                <hr>
                {{-- affichage des erreurs --}} 
                @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)
                    <li  class="alert alert-danger">{{  $error }}</li>
                @endforeach
                </ul>
                @endif
                <form action="{{route('PetiteEntreprise.store')}}" method="post"> 
                  @csrf
                    <div class="mb-3">
                      <label for="nom" class="form-label"><strong>Nom</strong></label>
                      <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{old('nom')}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="description" name="description" value="{{old('description')}}">
                      </div>
                      <div class="mb-3">
                        <select name="listeProjets" >
                          @foreach($projets as $projet)
                              <option value='{{$projet->id_projet}}'> {{$projet->intitule_projet}} </option>
                          @endforeach 
                        </select>
                      </div>
                      {{-- <a href="{{route('PetiteEntreprise.store')}}"  class="btn btn-primary">Ajouter la voiture</a> --}}
                      <button class="btn btn-info mb-2" type="submit" >Ajouter le client</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>