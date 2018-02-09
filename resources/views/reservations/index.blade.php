  @extends('layouts.app1')

@section('content')
    <section class="page-section cta">
        <div class="ui text container">
        <br><br>

        <center><h2 class="ui header">

      <b>LISTE DES POSITIONS ACCESSIBLES</b>

        </h2></center>
        <div class="ui brown image header"></div>
        
        <div class="ui bottom attached segment">
         <table class="ui  brown table">
        <thead>
          <tr><th> Vous avez réservé {{@$etud->chambre}}{{@$etud->pavillon}}{{' '}} {{@$etud->couloir }} !</th>
          </tr></thead><tbody>

          </tbody>
      </table> 
        
</div></div>
      </div></section>
        
        
    
    <p>
    </p>
    <p></p>
    @endsection
  </body>
</html>



