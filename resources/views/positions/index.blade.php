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
          <tr><th> <h3 class="ui brown large message ">Vous avez déjà réservé  {{@$etud->chambre}}{{@$etud->pavillon}}{{' '}} {{@$etud->couloir }} </h3>  </th>
          </tr>
        </thead><tbody>
      </table> 
      <a href="{{url('Reservationdestroy')}}" class ="ui brown button">Annuler</a>
      <a href="{{url('Reservationedit')}}" class="ui brown button">Valider</a>
        
</div></div>
      </div></section>
        
        
    
    <p>
    </p>
    <p></p>

  
    @endsection
  </body>
</html>



