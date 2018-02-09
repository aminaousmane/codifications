  @extends('layouts.app5')

@section('content')
    <section class="page-section cta">
        <div class="ui text container">
        <br><br>

        <center><h2 class="ui header">

      <b>ETAT DES RESERVATIONS</b>

        </h2></center>
        <div class="ui brown image header"></div>
        
        <div class="ui bottom attached segment">
          @if($pavillon->first())
         @foreach($pavillon as $c)
         <table class="ui  brown table">
        <thead>
          <tr><th>Pavillon {{$c->name}}</th>
          <th><a href="Reservationshow?pavillon={{$c->name}}" class="ui brown button">Voir</a></th>
          </tr></thead><tbody>

          </tbody>
      </table>
      @endforeach   
       @else
        <h3 class="ui brown message">Aucune réservation !</h3> 
        @endif
       </div>
      </div></section>
        
        
    
    <p>
    </p>
    <p></p>
    @endsection
  </body>
</html>



