<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Mes demandes</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>
  <body style="background-color: rgb(4, 0, 109)">
    <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color:aliceblue; font-size:40px">
                        Groupe003
                    </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                        <li><a href="/" >Accueil</a></li>

                        @if (Route::has('login'))
                          
                        @auth
                        <li><a href="{{url('mesDemandes')}}"  class="active">mesDemandes</a></li>
                     
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Faire une demande
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/faireDemande1">Certificat de diplôme</a>
                            <a class="dropdown-item" href="/faireDemande2">Facture</a>
                            <a class="dropdown-item" href="/faireDemande">Relever de note</a>
                            
                        </div>
                                                <x-app-layout>
                      </x-app-layout>
                      
                        @else
  
                        
                        <li><a href="{{route('login')}}">Connexion</a></li>
                        <li><a href="{{route('register')}}">Inscription</a></li>
  
                        @endauth
  
                        @endif
  
                    </ul>   
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
    </header>
    <h1 style="margin-top: 8%; margin-left: 5%;font-size: 36px; color: wheat">Mes demandes acceptées</h1>
    <div style="width: 90%; margin-left:5%; margin-top: 2%">
      <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="ex1-tab-1"
            data-mdb-toggle="tab"
            href="#ex1-tabs-1"
            role="tab"
            aria-controls="ex1-tabs-1"
            aria-selected="true"
            >En attente</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-2"
            data-mdb-toggle="tab"
            href="#ex1-tabs-2"
            role="tab"
            aria-controls="ex1-tabs-2"
            aria-selected="false"
            >Acceptée</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-3"
            data-mdb-toggle="tab"
            href="#ex1-tabs-3"
            role="tab"
            aria-controls="ex1-tabs-3"
            aria-selected="false"
            >Refusée</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-4"
            data-mdb-toggle="tab"
            href="#ex1-tabs-4"
            role="tab"
            aria-controls="ex1-tabs-4"
            aria-selected="false"
            >Prête</a
          >
        </li>
        
      </ul>
      <!-- Tabs navs -->
      
      <!-- Tabs content -->
      <div class="tab-content" id="ex1-content">
        <div
          class="tab-pane fade show active"
          id="ex1-tabs-1"
          role="tabpanel"
          aria-labelledby="ex1-tab-1"
        >
        <table class="table">
          <thead class="table-light">
            <tr>
              <td>N</td>
              <td>Nom et Prénoms</td>
              <td>Document</td>
              <td>E-mail</td>
              <td>Numéro</td>
              <td>Anneé Scolaire</td>
              <td>Anneé Académique</td>
              <td>Semestre</td>
              <td>Filière</td>
              <td>Motif</td>
              <td>Etat</td>
              <td>  </td>
            </tr>
          </thead>
          <tbody style="background-color: bisque">
            @foreach ($demandeE as $d)
            <tr>
              <td>{{$d->id}}</td>
              <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
              <td>{{$d->document}}</td>
              <td>{{$d->user->email}}</td>
              <td>{{$d->user->telephone}}</td>
              <td>{{$d->anneeScolaire}}</td>
              <td>{{$d->anneeAcademique}}</td>
              <td>{{$d->semestre}}</td>
              <td>{{$d->classe}}</td>
              <td>{{$d->motif}}</td>
              <td>{{$d->etat}}</td>
              <td>
                <form action="{{url('delete/'. $d->id)}}"  method="POST">
                  @csrf
          
                  <button type="submit" class="btn btn-danger wow zoomIn" style="color: black">Annuler</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
          <table class="table">
            <thead class="table-light">
              <tr>
                <td>N</td>
                <td>Nom et Prénoms</td>
                <td>Document</td>
                <td>E-mail</td>
                <td>Numéro</td>
                <td>Anneé Scolaire</td>
                <td>Semestre</td>
                <td>Filière</td>
                <td>Motif</td>
                <td>Etat</td>
              </tr>
            </thead>
            <tbody style="background-color: bisque">
              @foreach ($demandeA as $d)
              <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
                <td>{{$d->document}}</td>
                <td>{{$d->user->email}}</td>
                <td>{{$d->user->telephone}}</td>
                <td>{{$d->anneeScolaire}}</td>
              <td>{{$d->semestre}}</td>
              <td>{{$d->classe}}</td>
              <td>{{$d->motif}}</td>
                <td>{{$d->etat}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
          <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
        <table class="table">
          <thead class="table-light">
            <tr>
              <td>N</td>
              <td>Nom et Prénoms</td>
              <td>Nom du doc</td>
              <td>E-mail</td>
              <td>Numéro</td>
              <td>Anneé Scolaire</td>
              <td>Semestre</td>
              <td>Filière</td>
              <td>Motif</td>
              <td>Etat</td>
            </tr>
          </thead>
          <tbody style="background-color: bisque">
            @foreach ($demandeR as $d)
            <tr>
              <td>{{$d->id}}</td>
              <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
              <td>{{$d->document}}</td>
              <td>{{$d->user->email}}</td>
              <td>{{$d->user->telephone}}</td>
              <td>{{$d->anneeScolaire}}</td>
              <td>{{$d->semestre}}</td>
              <td>{{$d->classe}}</td>
              <td>{{$d->motif}}</td>
              <td>{{$d->etat}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
          <table class="table">
            <thead class="table-light">
              <tr>
                <td>N</td>
                <td>Nom et Prénoms</td>
                <td>Nom du doc</td>
                <td>E-mail</td>
                <td>Numéro</td>
                <td>Anneé Scolaire</td>
              <td>Semestre</td>
              <td>Classe</td>
              <td>Motif</td>
                <td>Etat</td>
              </tr>
            </thead>
            <tbody style="background-color: bisque">
              @foreach ($demandeP as $d)
              <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
                <td>{{$d->document}}</td>
                <td>{{$d->user->email}}</td>
                <td>{{$d->user->telephone}}</td>
                <td>{{$d->anneeScolaire}}</td>
              <td>{{$d->semestre}}</td>
              <td>{{$d->classe}}</td>
              <td>{{$d->motif}}</td>
                <td>{{$d->etat}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
    </div>
        <script
          type="text/javascript"
          src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
        ></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>