  @extends('layouts.app5')

@section('content')
    <section class="page-section cta">
        <div class="ui text container">
          <div class="ui bottom attached segment">
         <table class="ui  brown table">
        <thead>
          <tr><th> <h3 class="ui brown message">Les codifications sont déja ouvertes ! </h3> </th>
          </tr></thead><tbody>
          </tbody>
          <tr>
            @if($codif)
            <td>Date de début</td>
            <td>{{$codif->date_debut}}</td>
          </tr>
          <tr>
            <td>
              Date de fin
            </td>
            <td>
              {{$codif->date_fin }}
              @else
              @endif
            </td>
          </tr>
          <tr>
            <td><a href="{{url('Codificationdestroy')}}" class="ui brown button">Annuler</a></td>
            <td><a href="{{url('Codificationdestroy')}}" class="ui brown button">Fermer</a></td>
          </tr>
      </table> 
        
</div>
        
  </div></section>
    @endsection
  </body>
</html>



