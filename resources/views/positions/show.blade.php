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
          @if($position->first())
         @foreach($position as $c)
        <table class="ui brown celled  definition table">
            <thead>
          <tr><th>Chambre</th>
          <th>Pavillon</th>
          <th>Etage</th>
          <th>Couloir</th>
          <th>Genre</th>
          <th>Formation</th>
          <th></th>
          </tr></thead>
        <tbody>
          <tr>
            <td>{{ $c->chambre  }}</td>
            <td>{{ $c->pavillon  }}</td>
            <td>{{ $c->etage  }}</td>
            <td>{{ $c->couloir  }}</td>
            <td>{{ $c->genre  }}</td>
            <td>{{ $c->formation  }}</td>
            <td><a href="Reservationcreate?chambre={{$c->chambre}}&pavillon={{$c->pavillon}}&etage={{$c->etage}}&couloir={{$c->couloir}}" class ="ui brown button">Choisir</a> </td>
          </tr>

          </tbody>

      </table>
      @endforeach   
        @else
        <h3 class="ui brown message">Aucune position n'est accessible pour le moment ! </h3>
        @endif
   </div>
      </div></section>
        
        
    
    <p>
    </p>
    <p></p>
    @endsection
  </body>
</html>



