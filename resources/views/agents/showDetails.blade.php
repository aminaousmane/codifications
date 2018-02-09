  @extends('layouts.app1')

@section('content')
      <a class="item"  href="transporteurAccueil">Accueil</a>
      
      
    </div>
    </div>
    
        <div class="ui text container">
        <br><br>

        <center><h2 class="ui header">

      <b>Suivi Conteneur</b>

        </h2></center>
        <div class="ui brown image header"></div>
        <h4 class="ui top attached block header">
          LISTE DES POSITIONS ACCESSIBLES

        </h4>
        <div class="ui bottom attached segment">

         <div class="field"><label>Numero Contrat : <b>010101</b></label></div>
         <table class="ui inverted brown table">
        <thead>
          <tr><th>Food</th>
          <th>Calories</th>
          <th>Protein</th>
        </tr></thead><tbody>
          <tr>
            <td>Apples</td>
            <td>200</td>
            <td>0g</td>
          </tr>
          <tr>
            <td>Orange</td>
            <td>310</td>
            <td>0g</td>
          </tr>
        </tbody>
      </table>
      <br>
      <div class="field"><label>Numero Contrat : <b>020202</b></label></div>

      <table class="ui inverted brown table">
        <thead>
          <tr><th>Food</th>
          <th>Calories</th>
          <th>Protein</th>
        </tr></thead><tbody>
          <tr>
            <td>Apples</td>
            <td>200</td>
            <td>0g</td>
          </tr>
          <tr>
            <td>Orange</td>
            <td>310</td>
            <td>0g</td>
          </tr>
        </tbody>
      </table>
        

        </div>

             <div class="ui pagination menu">
  <a class="active item">
    1
  </a>
  <div class="active item">
    2
  </div>
  <a class="active item">
    3
  </a>
  <div class="active item">
    4
  </div>
  <a class="active item">
    5
  </a>
  <div class="active item">
    6
  </div>
  <a class="active item">
    7
  </a>
  <div class="active item">
    8
  </div>
  <a class="active item">
    9
  </a>
  <div class="active item">
    10
  </div>
  <a class="active item">
    11
  </a>
  <div class="active item">
    12
  </div>
  <a class="active item">
    13
  </a>
  <div class="active item">
    14
  </div>
</div>
        
        
    
    <p>
    </p>
    <p></p>
    @endsection
  </body>
</html>






  @extends('layouts.app1')

@section('content')

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Liste des Positions Accessibles </span>

               
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                 @foreach($position as $c)
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{ $c->chambre  }}{{ $c->pavillon  }}
                  <span class="ml-auto"><a href="" class ="ui brown button">Afficher</a></span>
                </li>
                </li>
               @endforeach
            
              </ul>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; UACD/ESP DAKAR 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

@endsection
</body>
</html>


        