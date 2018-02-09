@extends('layouts.app5')
@section('content')
        <br><br><br>
        <div class="ui container">
        <div class="column">
        <center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>OUVERTURE DES CODIFICATIONS</b>
                                  

                        </div>
                </h2></center>
        <form class="ui form segment" method="POST" action="{{url('Pavillonstore')}}">
                  
                        {{ csrf_field()}}
                      <div class="field">
                        <label>Date de début</label>
                        <input placeholder="" name="date_debut" type="text" value="{{now()}}">
                      </div>
                      <div class="field">
                    <label>Date de fin</label>
                    <input placeholder="" name="date_fin" type="text" value="{{now()}}">
                  </div>
                 
                  
                  
                  <button type="submit" class=" ui brown fluid large  submit button" >LANCER </button>
                  
                </form>
                </div>
                </div>
                @endsection

