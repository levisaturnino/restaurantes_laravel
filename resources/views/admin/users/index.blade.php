@extends('layouts.app')

@section('content')

<div class="container">
    @include('flash::message')

<a href="{{route('user.new')}}" class="float-right btn btn-success">Novo</a>

<h1 class="float-left ">useres</h1>

<table class="table table-striped">
<thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Criado em</th>
        <th>Ações</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->created_at}}</td>
      <td>
        <a href="{{route('user.edit',['user' =>$user->id])}}" class=" btn btn-primary">Editar</a>
        <a href="{{route('user.destroy',['id' =>$user->id])}}"class="btn btn-danger">Excluir</a></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection
