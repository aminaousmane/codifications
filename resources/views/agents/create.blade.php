@extends('layouts.app4')
@section('content')
        <br><br><br>
        <div class="ui container">
        <div class="column">
        <center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>CREATION AGENTS</b>
                                  

                        </div>
                </h2></center>
        <form class="ui form segment" method="POST" action="{{url('Agentstore')}}">
                  
                        {{ csrf_field()}}
                      <div class="field">
                        <label>Prénom et nom</label>
                        <input placeholder="name" name="name" type="text">
                      </div>
                      <div class="field">
                        <label>E-Mail</label>
                        <input id="email" type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="field">
                        <label>Mot De Passe</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Mot De Passe" required>
                      </div>
                  
                  
                  <button type="submit" class=" ui brown fluid large  submit button" >AJOUTER UN AGENT </button>
                  
                </form>
                </div>
                </div>
                @endsection

