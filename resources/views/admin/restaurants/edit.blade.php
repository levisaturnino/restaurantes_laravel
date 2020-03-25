<h1>Insercao de Restaurante</h1>
<hr>
<form action="{{route('restaurant.update',['id'=>$restaurant->id])}}" method="GET">
    {{@csrf_field()}}
    <p>
        <label for="">Nome do Restaurante</label><br/>
        <input type="text" name="name" value="{{$restaurant->name}}">
    </p>
    <p>
        <label for="">Endereço</label><br/>
        <input type="text" name="address" value="{{$restaurant->address}}">
    </p>
    <p>
        <label for="">Fale sobre o restaurante</label><br/>
        <textarea cols="30" rows="10" name="description">{{$restaurant->description}}</textarea>
    </p>
    <input type="submit" value="update">
</form>
