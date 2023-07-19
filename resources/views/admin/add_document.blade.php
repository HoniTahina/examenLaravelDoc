
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

                <form action="{{url('upload_document')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div style="padding:15px;">
                        <label for="">Nom Document</label>
                        <input type="text" style="color:black"; name="nom" placeholder="Entrer le nom" required="">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Format Document</label>
                        <input type="text" style="color:black"; name="format" placeholder="Entrer le format" required="">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Type</label>
                        <select name="type" style="color:black; width: 200px;" name="" id="" required="">
                            <option value="">--Select--</option>
                            <option value="administratif">Administratif</option>
                            <option value="scolaire">Scolaire</option>
                            <option value="medicaux">Medicaux</option>
                        </select>
                    </div>

                    <div style="padding:15px;">
                        <label for="">Document Image</label>
                        <input type="file"  name="file">
                    </div>

                    <div style="padding:15px;">
                        
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>
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