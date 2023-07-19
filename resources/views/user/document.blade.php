<div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Liste des documents</h6>
            <h2>Les plus demandés</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="/voirTous">Tous voir</a>
          </div>
        </div>
          @foreach ($document as $documents)
            
          
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="item">
              <div class="thumb">
                <a href=""><img src="documentimage/{{$documents->image}}" alt=""></a>
              </div>
              <div class="down-content">
                <h4>{{$documents->nom}}</h4>
                  <span class="category">{{$documents->type}}</span>
                  <a id="button" type="submit">{{$documents->format}}</a>
              </div>
            </div>
          </div>
          
          @endforeach
        
      </div>
    </div>
  </div>

  <script>
    //  var mybutton = document.querySelector(".button");
   
    // var dis =  document.getElementById("button").disabled = true ;
     console.log(dis);
    
  </script>