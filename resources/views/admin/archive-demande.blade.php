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
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
  />
  <!-- MDB -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
    rel="stylesheet"
  />
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
               <!-- Tabs navs -->
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
      >Prête</a
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
      >Refusée</a
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
        <td>Nom du doc</td>
        <td>E-mail</td>
        <td>Numéro</td>
        <td>Date</td>
        <td>Message</td>
        <td>Etat</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($demandeP as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
        <td>{{$d->document}}</td>
        <td>{{$d->user->email}}</td>
        <td>{{$d->user->telephone}}</td>
        <td>{{$d->date}}</td>
        <td>{{$d->message}}</td>
        <td>{{$d->etat}}</td>
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
          <td>Nom du doc</td>
          <td>E-mail</td>
          <td>Numéro</td>
          <td>Date</td>
          <td>Message</td>
          <td>Etat</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($demandeR as $d)
        <tr>
          <td>{{$d->id}}</td>
          <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
          <td>{{$d->document}}</td>
          <td>{{$d->user->email}}</td>
          <td>{{$d->user->telephone}}</td>
          <td>{{$d->date}}</td>
          <td>{{$d->message}}</td>
          <td>{{$d->etat}}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
    ></script>
  </div>
</div>
<!-- Tabs content -->
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