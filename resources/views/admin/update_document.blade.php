
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

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
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div class="container" align="center" style="padding:100px;">
              @if (session()->has('message'))

               <div class="alert alert-success">
                   <button type="button" class="close" data-dismiss="alert">
                       x
                   </button>
                   {{session()->get('message')}}

               </div>
                   
               @endif
              <div style="padding:15px;">
                <form action="{{url('editdocument',$data->id)}}" 
                  method="POST" enctype="multipart/form-data">

                    @csrf


                    <label for="">Nom Document</label>
                    <input type="text" style="color:black;" name="nom" value="{{$data->nom}}">
                  </div>

                  <div style="padding:15px;">
                    <label for="">Format</label>
                    <input type="text" style="color:black;" name="format" value="{{$data->format}}">
                  </div>

                  <div style="padding:15px;">
                    <label for="">Type Document</label>
                    <input type="text" style="color:black;" name="type" value="{{$data->type}}">
                  </div>


                  <div style="padding:15px;">
                    <label for="">Ancien Document</label>
                    <img height="150" width="150" src="documentimage/{{$data->image}}" alt="" srcset="">
                  </div>

                  <div style="padding:15px;">
                    <label for="">Nouveau Document</label>
                    <input type="file" name="file">
                  </div>

                  <div style="padding:15px;">
                    <input type="submit" class="btn btn-primary">
                  </div>
                </form>
              </div>

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