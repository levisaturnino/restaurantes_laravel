@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')

<h1>Insercao de Restaurante</h1>
<hr>
<form action="{{route('restaurant.update',['id'=>$restaurant->id])}}" method="GET">
    {{@csrf_field()}}
    <p class="form-group">
        <label for="">Nome do Restaurante</label><br/>
        <input type="text" name="name" value="{{$restaurant->name}}" class="form-control @if($errors->has('name'))is-invalid @endif">
    @if($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{$errors->first('name')}}</strong>
        </span>
    @endif

    </p>
    <p class="form-group">
        <label for="">Endereço</label><br/>
        <input type="text" name="address" value="{{$restaurant->address}}" class="form-control @if($errors->has('address'))is-invalid @endif">
        @if($errors->has('address'))
        <span class="invalid-feedback">
            <strong>{{$errors->first('address')}}</strong>
        </span>
    @endif
    </p>
    <p class="form-group">
        <label for="">Fale sobre o restaurante</label><br/>
        <textarea cols="30" rows="10" name="description" class="form-control @if($errors->has('description'))is-invalid @endif">{{$restaurant->description}}</textarea>
        @if($errors->has('description'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('description')}}</strong>
            </span>
         @endif
    </p>
    <input type="submit" value="update" class="btn btn-success btn-lg">
</form>
</div>
@endsection
