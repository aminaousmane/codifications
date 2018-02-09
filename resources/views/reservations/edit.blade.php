  @extends('layouts.app1')

@section('content')
    <section class="page-section cta">
        <div class="ui text container">
        <br><br>

        <center><h2 class="ui header">

      <b>CODIFICATION</b>

        </h2></center>
        <div class="ui brown image header"></div>
        
        <div class="ui bottom attached segment">
         <table class="ui  brown table">
        <thead>
          <tr><th> <h3 class="ui brown large message ">Vous avez déjà codifiée  {{@$etud->chambre}}{{@$etud->pavillon}}{{' '}} {{@$etud->couloir }}{{' '}}</br> 
              Vous pouvez vous rendre à votre pavillon pour payez vos frais et récupérer votre clé !
           </h3>  </th>
          </tr>
        </thead><tbody>
      </table> 
        
</div></div>
      </div></section>
        
        
    
    <p>
    </p>
    <p></p>

  
    @endsection
  </body>
</html>



