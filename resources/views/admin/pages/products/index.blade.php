@extends('admin.layouts.app')

@section('title','Gestão de Produtos')

@section('content')

        <h1>Exibindo os Produtos</h1>

        @unless ($teste == 1)
            ivan gay
        @else
            marcos lindo
        @endunless 

        @if ($teste == 1)
            marcos lindo
        @else
            ivan gay
        @endif



@endsection
