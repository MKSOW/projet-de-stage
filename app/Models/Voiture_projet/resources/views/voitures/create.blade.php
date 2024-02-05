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
            <div class="col-9">
                
                <h1> REMPLISSEZ CE FORMULAIRE POUR AJOUTER UNE NOUVELLE VOITURE A VOTRE PANIER</h1>
                <hr>

              {{-- affichage des erreurs --}}
                @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)
                    <li  class="alert alert-danger">{{  $error }}</li>
                @endforeach
                </ul>
                @endif

                <form action="{{route('voitures.store')}}" method="post"> 
                      <div class="mb-3">
                        <label for="marque" class="form-label"><strong>Marque</strong></label>
                        <input type="text" id="marque" class="form-control" placeholder="marque" name="marque" value="{{old('marque')}}">
                      </div>
                      <div class="mb-3">
                        <label for="modele" class="form-label"><strong>Modele</strong></label>
                        <input type="text" id="modele" class="form-control" placeholder="modele" name="modele" value="{{old('modele')}}">
                      </div><div class="mb-3">
                        <label for="annee" class="form-label"><strong>Annee</strong></label>
                        <input type="text" id="annee" class="form-control" placeholder="annee" name="annee" value="{{old('annee')}}">
                      </div><div class="mb-3">
                        <label for="kilometrage" class="form-label"><strong>Kilometrage</strong></label>
                        <input type="text" id="kilometrage" class="form-control" placeholder="kilometrage" name="kilometrage" value="{{old('kilometrage')}}">
                      </div><div class="mb-3">
                        <label for="prix" class="form-label"><strong>Prix</strong></label>
                        <input type="text" id="prix" class="form-control" placeholder="prix" name="prix" value="{{old('prix')}}">
                        {{-- <br>
                        <a href="/voiture" class="btn btn-secondary"> REVENIR A LA LISTE DES VOITURES</a> --}}
                        <br> <br>
                        @csrf
                      {{-- <a href="{{route('voitures.store')}}"  class="btn btn-primary">Ajouter la voiture</a> --}}
                      <button class="btn btn-info mb-2" type="submit" >Ajouter la voiture</button>
                  </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>