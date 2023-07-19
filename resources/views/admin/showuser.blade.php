
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            
            <div align="center" style="padding:70px;">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 10px; font-size: 20px; color:white;">Nom Utilisateur</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Preom Utilisateur</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Email</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Adresse</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Update</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Delete</th>
                        
                    </tr>
            
                    @foreach ($data as $document)
            
        
                    <tr style="background-color: skyblue;" align="center">

                        <td style="padding: 10px; font-size: 20px; color:white;">{{$document->nom}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$document->prenom}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$document->email}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$document->email}}</td>
                        <td><a class="btn btn-success" href="{{url('updatedocument', $document->adresse)}}">Update</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('are you sure to delet this')" href="{{url('deletedocument', $document->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
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