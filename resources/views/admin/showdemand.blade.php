
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
            
            <div>
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 10px; font-size: 20px; color:white;">Nom Etudiant</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Email</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Phone</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Nom Document</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Date</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Message</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Status</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Validé</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Refusé</th>
                        <th style="padding: 10px; font-size: 20px; color:white;">Pret</th>
                    </tr>
            
                    @foreach ($data as $demande)
            
        
                    <tr style="background-color: skyblue;">

                        <td style="padding: 10px; font-size: 20px; color:white;">{{$demande->nom}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$demande->email}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$demande->phone}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$demande->document}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$demande->date}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$demande->message}}</td>
                        <td style="padding: 10px; font-size: 20px; color:white;">{{$demande->status}}</td>
                        <td><a class="btn btn-success" href="{{url('valide', $demande->id)}}">Approved</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('are you sure to delet this')" href="{{url('canceled', $demande->id)}}">Cancel</a></td>
                        <td><a class="btn btn-primary" href="{{url('pret', $demande->id)}}">Pret</a></td>
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