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
        <form class="ui form segment" method="POST" action="{{url('Couloirstore')}}">
                  
                        {{ csrf_field()}}
                      <div class="field">
                    <label>Couloir</label>
                        <select  name="direction" type="text">
                          <option>Gauche </option>
                          <option>Droite</option>
                        </select>
                      </div>
                  <div class="field">
                    <label>Etage</label>
                    <select  name="etage" type="text">
                          <option>0</option>
                          <option>1 </option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                    </select>
                  </div>
                 
                  
                  
                  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UN COULOIR </button>
                  
                </form>
                </div>
                </div>
                @endsection

