@extends('layouts.app5')
@section('content')
		<br><br><br>
		<div class="ui container">
		<div class="column">
		<center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>CREATION PAVILLONS</b>
                                  

                        </div>
                </h2></center>
		<form class="ui form segment">
				  
    				  <div class="field">
      					<label>Nom du pavillon</label>
      					<input placeholder="Prenom" name="prenom" type="text">
    				  </div>
				  <div class="field">
				  	<label>Site</label>
				    	<input placeholder="site" name="site" type="text">
			          </div>
				 
				  
				  
				  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UN PAVILLON </button>
				  
				</form>
				</div>
				</div>
				@endsection

