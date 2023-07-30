<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Faire une demande</title>

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
                        <li><a href="{{url('mesDemandes')}}">MesDemandes</a></li>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Faire une demande
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/faireDemande1">Certificat de diplôme</a>
                            <a class="dropdown-item" href="/faireDemande2">Facture</a>
                            <a class="dropdown-item" href="/faireDemande">Relever de note</a>
                            
                        </div>
                      {{-- <li><a href="{{url('faireDemande')}}"  class="active">Faire une demande</a></li> --}}
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
    <h1 style="margin-top: 8%; margin-left: 40%;font-size: 36px; color: wheat">Demande de facture</h1>
    <form action="{{url('add_demande')}}"  method="POST" style="width: 40%; margin-left:30%; margin-top: 2%">
      @csrf
      {{-- <div class="form-outline mb-4" data-wow-delay="300ms">
        <input type="date" name="date" class="form-control" required>
      </div> --}}

      <div class="form-outline mb-4" data-wow-delay="300ms">
        <label for="document" style="color: blanchedalmond">Document</label >
        <select name="document" id="departement" class="custom-select" required>          
        
          <option value="Relever de note">Facture</option>
          
        </select>
      </div>
      <div class="form-outline mb-4" data-wow-delay="300ms">
        <label for="anneeScolaire" style="color: blanchedalmond">Année scolaire</label>
        <select name="anneeScolaire" id="anneeScolaire" class="custom-select" required>          
          <option value="2010 - 2011">2010 - 2011</option>
          <option value="2011 - 2012">2011 - 2012</option>
          <option value="2012 - 2013">2012 - 2013</option>
          <option value="2013 - 2014">2013 - 2014</option>
          <option value="2014 - 2015">2014 - 2015</option>
          <option value="2015 - 2016">2015 - 2016</option>
          <option value="2016 - 2017">2016 - 2017</option>
          <option value="2017 - 2018">2017 - 2018</option>
          <option value="2018 - 2019">2018 - 2019</option>
          <option value="2019 - 2020">2019 - 2020</option>
          <option value="2020 - 2021">2020 - 2021</option>
          <option value="2021 - 2022">2021 - 2022</option>
          <option value="2022 - 2023">2022 - 2023</option>          
        </select>
      </div>  
      <div class="form-outline mb-4" data-wow-delay="300ms">
        <label for="anneeAcademique" style="color: blanchedalmond">Année Academique</label>
        <select name="anneeAcademique" id="anneeAcademique" class="custom-select" required>          
          <option value="1ère année">1ère année</option>
          <option value="2ème année">2ème année</option>
          <option value="3ème année">3ème année</option>        
          <option value="3ème année">4ème année</option>        
          <option value="3ème année">5ème année</option>        
        </select>
      </div> 
      <div class="form-outline mb-4" data-wow-delay="300ms">
        <label for="mois" style="color: blanchedalmond">Mois</label>
        <select name="mois" id="mois" class="custom-select" required>          
          
          <option value="Novembre">Novembre</option>
          <option value="Decembre">Decembre </option>    
          <option value="Janvier">Janvier</option> 
          <option value="Février">Février</option>  
          <option value="Mars">Mars</option>  
          <option value="Avril">Avril</option>
          <option value="Mai">Mai</option>   
          <option value="Juin">Juin</option> 
          <option value="Juillet">Juillet</option>        
          <option value="Aout">Aout</option>   
        </select>
      </div>  
      <div class="form-outline mb-4" data-wow-delay="300ms">
        <label for="classe" style="color: blanchedalmond">Filière</label>
        <select name="classe" id="classe" class="custom-select" required>          
          <option value="GL">GL</option>
          <option value="IAGE">IAGE</option>
          <option value="RI">RI</option>        
          <option value="Multimédia">Multimédia</option>        
        </select>
      </div>  
      <!-- Message input -->
      <div class="form-outline mb-4">
        <textarea class="form-control" id="form4Example3" name="motif" placeholder="Motif.." rows="4" required></textarea>
      </div>
    
     
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 50%; margin-left:30% ">Envoyer</button>
    </form>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>