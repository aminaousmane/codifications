  @extends('layouts.app4')

@section('content')
    <section class="page-section cta">
        <div class="ui text container">
        <br><br>

        <center><h2 class="ui header">

      <b>LISTE DES AGENTS</b>

        </h2></center>
        <div class="ui brown image header"></div>
        
        <div class="ui bottom attached segment">
          @if($agent->first())
         @foreach($agent as $c)
        <table class="ui brown  table">
            <thead>
          <tr><th>Nom</th>
          <th>Email</th>
          <th></th>
          </tr></thead>
        <tbody>
          <tr>
            <td>{{ $c->name  }}</td>
            <td>{{ $c->email  }}</td>
            <td><a href="Agentdestroy?email={{$c->email}}" class ="ui brown button">Supprimer</a> </td>
          </tr>

          </tbody>

      </table>
      @endforeach   
        @else
        <h3 class="ui brown message">Aucun agent n'a était ajouté ! </h3>
        @endif
   </div>
      </div></section>
        
        
    
    <p>
    </p>
    <p></p>
    @endsection
  </body>
</html>



