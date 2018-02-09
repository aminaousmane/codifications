@extends('template')

@section('titre')
	Les formulaires
@endsection

@section('contenu')
{!!Form::open(['url'=> 'users'])!!}	
	{!!Form::label('nom','Entrez votre nom :')!!}
	{!!Form::text('nom')!!}	
	{!!Form::submit('Envoyer')!!}
{!!Form::close()!!}
@endsection


