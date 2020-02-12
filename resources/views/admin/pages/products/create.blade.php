@extends('admin.layouts.app')

@section('title','Cadastro de Produtos')
    


@section('content')
    <h1>Cadasto de Produtos</h1>

    <form action="{{ route('products.store') }}" method="POST" >
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}} 
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
       <button type="submit">enviars</button>
    </form>
@endsection