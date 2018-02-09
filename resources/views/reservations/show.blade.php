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
          @if($reservation->first())
             @foreach($reservation as $c)
              <table class="ui brown celled  definition table">
          <thead>
            <th>
              Etudiant
            </th>
            <th>
              Chambre
            </th>
            <th>
              Etage
            </th>
            <th>
              Couloir
            </th>
            <th>
              Date de réservation
            </th>
            <th>
              Etat
            </th>
          </thead>
        <tbody>
          <tr>
            <td>{{ $c->etudiant  }}</td>
            <td>{{ $c->chambre  }}</td>
            <td>{{ $c->etage  }}</td>
            <td>{{ $c->couloir  }}</td>
            <td>{{ $c->date_reservation  }}</td>
            <td>{{ $c->etat  }}</td>
          </tr></thead><tbody>
          </tbody>
      </table>
      @endforeach 
          @else
          <h3 class ="ui message">Il n'y a aucune réservation !</h3>
         
      @endif 
       </div>
      </div></section>
        
        
    
    <p>
    </p>
    <p></p>
    @endsection
  </body>
</html>



