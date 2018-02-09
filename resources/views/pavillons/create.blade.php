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
        <form class="ui form segment" method="POST" action="{{url('Pavillonstore')}}">
                  
                        {{ csrf_field()}}
                      <div class="field">
                        <label>Nom Du Pavillon</label>
                        <select placeholder="name" name="name" type="text">
                          <option>A</option>
                          <option>B</option>
                          <option>C</option>
                          <option>D</option>
                          <option>E</option>
                          <option>F</option>
                          <option>G</option>
                          <option>H</option>
                          <option>I</option>
                          <option>J</option>
                          <option>K</option>
                          <option>L</option>
                          <option>M</option>
                          <option>N</option>
                          <option>O</option>
                        </select>
                      </div>
                      <div class="field">
                    <label>Site</label>
                    <select placeholder="site" name="site" type="text">
                      <option>ESP</option>
                      <option>ENSEPT</option>
                    </select>
                  </div>
                 
                  
                  
                  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UN PAVILLON </button>
                  
                </form>
                </div>
                </div>
                @endsection

