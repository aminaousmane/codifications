@extends('layouts.app5')
@section('content')
		<br><br><br>
		<div class="ui container">
		<div class="column">
		<center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>CREATION ETAGES</b>
                                  

                        </div>
                </h2></center>
		<form class="ui form segment">
				  
    				  <div class="field">
      					<label>Niveau</label>
      					<input placeholder="niveau" name="niveau" type="text">
    				  </div>
				  <div class="field">
				    <label>Pavillon</label>
				    <input placeholder="pavillon" name="pavillon" type="text">
				  </div>
				  
				 
				  
				  
				  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UNE ETAGE </button>
				  
				</form>
				</div>
				</div>
				@endsection

s