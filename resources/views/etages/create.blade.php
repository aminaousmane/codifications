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
        <form class="ui form segment" method="POST" action="{{url('Etagestore')}}">
                  
                        {{ csrf_field()}}
                      <div class="field">
                        <label>Niveau</label>
                        <select  name="niveau" type="text">
                          <option value="0">Rez-de-chaussée </option>
                          <option>1 </option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                    </select>
                      </div>
                      <div class="field">
                    <label>Pavillon</label>
                    <select  name="pavillon" type="text">
                          <option>A </option>
                          <option>B</option>
                          <option>C</option>
                          <option>D</option>
                          <option>E</option>
                          <option>F</option>
                    </select>
                  </div>
                 
                  
                  
                  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UNE ETAGE </button>
                  
                </form>
                </div>
                </div>
                @endsection

