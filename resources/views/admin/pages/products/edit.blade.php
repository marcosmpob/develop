@extends('admin.layouts.app')

@section('title','Editar Produtos')
    


@section('content')
    <h1>Editar de Produtos  </h1>

    <form action="{{ route('products.update',$teste) }}" method="POST" >
    <input type="hidden" name="_method" value="PUT"> 
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
       <button type="submit">enviar</button>
    </form>
@endsection