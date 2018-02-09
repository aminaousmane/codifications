@extends('layouts.app1')
@section('content')
        <br><br><br>
        <div class="ui container">
        <div class="column">
        <center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>RESERVATIONS</b>
                                   
{{$chambre=$_GET['chambre']}}
{{$pavillon=$_GET['pavillon']}}
                        </div>
                </h2></center>
        <form class="ui form segment" method="POST" action="{{url('Reservationstore')}}">
                  
                        {{ csrf_field()}}
                      <div class="field">
                        <label>Numéro Etudiant</label>
                        <input  name="etudiant" type="text" readonly="readonly" value="{{ Auth::user()->id_etudiant }}">
                      </div>
                      <div class="field">
                    <label>Date De Réservation</label>
                    <input  name="date_reservation" type="text" readonly="readonly" value="{{now()}}">
                  </div>
                  <div class="field">
                    <label>Chambre</label>
                    <input  name="chambre" type="text" readonly="readonly" value="{{ $chambre }}">
                  </div>
                  <div class="field">
                    <label>Pavillon</label>
                        <input  name="pavillon" type="text" readonly="readonly" value="{{$pavillon}}">
                      </div>
   
                 <div class="field">
                    <label>Etage</label>
                        <input  name="etage" type="text" readonly="readonly" value="{{$etage=$_GET['etage']}}">
                      </div>
                       <div class="field">
                    <label>Couloir</label>
                        <input  name="couloir" type="text" readonly="readonly" value="{{$coulouir=$_GET['couloir']}}
">
                      </div>
                  
                  
                  <button type="submit" class=" ui brown fluid large  submit button" >RESERVER </button>
                  
                </form>
                </div>
                </div>
                @endsection

