@extends('template')
 
@section('titre')
    Les articles
@endsection
 
@section('contenu')
    <p>C'est l'article n° {{ $number }}</p>
@endsection