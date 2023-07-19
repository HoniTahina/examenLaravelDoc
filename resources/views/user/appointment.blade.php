<div class="page-section mt-5">
    <div class="container">
        <div class="row">

      <h1 class="text-center wow fadeInUp">Faire une demande</h1>

      <form action="{{url('add_demande')}}"  method="POST" style="width: 40%; margin-left:30%; margin-top: 2%">
        @csrf
        <div class="form-outline mb-4" data-wow-delay="300ms">
          <input type="date" name="date" class="form-control">
        </div>
  
        <div class="form-outline mb-4" data-wow-delay="300ms">
          <select name="document" id="departement" class="custom-select">
            <option value="general">Selectionner un document</option>
            
            @foreach ($document as $documents)
            <option value="{{$documents->nom}}">{{$documents->nom}}</option>
          @endforeach
            
          </select>
        </div>
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" name="message" placeholder="Motif..." rows="4"></textarea>
        </div>
      
       
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 50%; margin-left:30%; color:darkgray ">Envoyer</button>
      </form>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
      
</div>
</div>
  </div>