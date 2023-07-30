<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            display: block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">   
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            

            
        <!-- partial -->
            <div class="container" align="center"
               style="padding-top: 100px;">


               @if (session()->has('message'))

               <div class="alert alert-success">
                   <button type="button" class="close" data-dismiss="alert">
                       x
                   </button>
                   {{session()->get('message')}}

               </div>
                   
               @endif
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
                    >Non lue</a
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
                    >En attente</a
                  >
                </li>
                
              </ul>
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
                      <td>Nom du document</td>
                      <td>E-mail</td>
                      <td>Numéro</td>
                      <td>Année scolaire</td>
                      <td>Année académique</td>
                      <td>Semestre</td>
                      <td>Filière</td>
                      <td>Motif</td>
                      <td>Etat</td>                             
                      <td></td>                             

                    </tr>
                  </thead>
                  <tbody>
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
                      <td><a class="btn btn-success" href="{{url('valide', $d->id)}}">Accepter</a> <a class="btn btn-danger" onclick="return confirm('Etes vous sûr de refuser cette demande? ')" href="{{url('canceled', $d->id)}}">Refuser</a></td>

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
                      <td>Nom du document</td>
                      <td>E-mail</td>
                      <td>Numéro</td>
                      <td>Année scolaire</td>
                      <td>Année académique</td>
                      <td>Semestre</td>
                      <td>Filière</td>
                      <td>Motif</td>
                      <td>Etat</td>                             
                      <td></td>  
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($demandeA as $d)
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
                        <td><a class="btn btn-primary" href="{{url('pret', $d->id)}}">Prête</a></td>
                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <script
                    type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
                  ></script>
            </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>