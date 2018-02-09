@extends('layouts.app5')
@section('content')
		<br><br><br>
		<div class="ui container">
		<div class="column">
		<center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>CREATION COULOIRS</b>
                                  

                        </div>
                </h2></center>
		<form class="ui form segment">
				  
    				  <div class="field">
      					<label>Pavillons</label>
      					<input placeholder="Pavillon" name="pavillon" type="text">
    				  </div>
				  <div class="field">
				    <label>Etage</label>
				    <input placeholder="etage" name="etage" type="text">
				  </div>
				  <div class="field">
				  	<label>Direction</label>
				    	<input placeholder="direction" name="direction" type="text">
			          </div>
				 
				  
				  
				  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UN COULOIR </button>
				  
				</form>
				</div>
				</div>
				@endsection

