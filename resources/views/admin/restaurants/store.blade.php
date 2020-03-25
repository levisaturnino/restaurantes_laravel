<h1>Insercao de Restaurante</h1>
<hr>
<form action="{{route('restaurant.store')}}" method="POST">
    {{@csrf_field()}}
    <p>
        <label for="">Nome do Restaurante</label><br/>
        <input type="text" name="name" value="{{old('name')}}">
        <br/>
        @if($errors->has("name"))
            {{ $errors->first("name")}}
        @endif
    </p>
    <p>
        <label for="">Endereço</label><br/>
        <input type="text" name="address" value="{{old('address')}}">
        <br/>
        @if($errors->has("address"))
        {{ $errors->first("address")}}
    @endif
    </p>
    <p>
        <label for="">Fale sobre o restaurante</label><br/>
        <textarea cols="30" rows="10" name="description">{{old('description')}}</textarea>
        <br/>
        @if($errors->has("description"))
        {{ $errors->first("description")}}
    @endif
    </p>
    <input type="submit" value="Cadastrar">
</form>
