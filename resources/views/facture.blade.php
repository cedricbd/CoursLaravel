@extends('template')

@section('titre')
    les factures
@endsection

@section('contenu')
<p>C'est la facture n° {{ $numero }}</p>
@endsection