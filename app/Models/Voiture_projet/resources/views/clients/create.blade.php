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

                <form action="{{route('clients.store')}}" method="post"> 
                      <div class="mb-3">
                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{old('nom')}}">
                      </div>
                      <div class="mb-3">
                        <label for="prenom" class="form-label"><strong>Prenom</strong></label>
                        <input type="text" id="prenom" class="form-control" placeholder="prenom" name="prenom" value="{{old('prenom')}}">
                      </div><div class="mb-3">
                        <label for="email" class="form-label"><strong>Email</strong></label>
                        <input type="email" id="email" class="form-control" placeholder="email" name="email" value="{{old('email')}}">
                      </div><div class="mb-3">
                        <label for="adresse" class="form-label"><strong>Adresse</strong></label>
                        <input type="text" id="adresse" class="form-control" placeholder="adresse" name="adresse" value="{{old('adresse')}}">
                      </div>
                      <label for="ville" class="form-label"><strong>ville</strong></label>
                      <input type="text" id="ville" class="form-control" placeholder="ville" name="ville" value="{{old('ville')}}">
                    </div>
                    <label for="numero_tel" class="form-label"><strong>Numero de telephone</strong></label>
                    <input type="text" id="numero_tel" class="form-control" placeholder="numero_tel" name="numero_tel" value="{{old('numero_tel')}}">
                  </div>
                        <br> <br>
                        @csrf
                      {{-- <a href="{{route('clients.store')}}"  class="btn btn-primary">Ajouter la voiture</a> --}}
                      <button class="btn btn-info mb-2" type="submit" >Ajouter le client</button>
                  </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>