@extends('layouts.app5')
@section('content')
		<br><br><br>
		<div class="ui container">
		<div class="column">
		<center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>CREATION CHAMBRES</b>
                                  

                        </div>
                </h2></center>
		<form class="ui form segment" method="POST" action="{{url('declarerChambre')}}">
				  
				  		{{ csrf_field()}}
    				  <div class="field">
      					<label>Code Chambre</label>
      					<input placeholder="Code" name="code" type="text">
    				  </div>
    				  <div class="field">
				    <label>Pavillon</label>
				    <input placeholder="pavillon" name="pavillon" type="text">
				  </div>
				  <div class="field">
				    <label>Etage</label>
				    <input placeholder="etage" name="etage" type="text">
				  </div>
				  <div class="field">
				  	<label>Couloir</label>
				    	<input placeholder="couloir" name="couloir" type="text">
			          </div>
				 
				  
				  
				  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UNE CHAMBRE </button>
				  
				</form>
				</div>
				</div>
				@endsection

